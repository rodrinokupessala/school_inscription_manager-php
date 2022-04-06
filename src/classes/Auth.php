<?php
declare(strict_types=1);
//namespace school_inscription_manager\classes\Auth;
 require_once "Secure.php";
/**
 * Functions.php
 *
 * This file contains all for security of my php functions that are used throught
 * this project. This file in included in many other php files in 
 * also included in this project.
 *
 
 * @copyright  2022 Rodrino Adolfo Kupessala< https://github.com/rodrinokupessala>
 * @version    Release: 1.0
 **/ 
class Auth extends Secure {
    
private $secure;
/**
 * Method login.
 * @var username,password,conn
 * 
 * @author Rodrino Adolfo Kupessala<rkupessala@gmail.com> 
 */ 
 function __construct(){
    
}
 function login($username, $password, $conn) {

    $user = $this->xssPrevent($username); //XSS Security
 
    try{
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=:username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }catch(PDOException $exception){ 
        return [header('X-PHP-Response-Code: 500', true, 500),http_response_code(500)];
    }


    if ($stmt->rowCount() > 0) {
       
       
            $hash=$result['password'];
    
            if (password_verify($password, $hash)) {
               // $this->sec_session_start('');
               session_start();
                $user_browser = $_SERVER['HTTP_USER_AGENT'];
                $_SESSION['uid']=$result['uid'];
                $_SESSION['login_string']=hash('sha512', $hash . $user_browser);
                $_SESSION['user']=$result['username'];
                $currTime = time();
             

                return [header('X-PHP-Response-Code: 200', true, 200),http_response_code(200)];

            }else{
              
                return [header('X-PHP-Response-Code: 401', true, 401),http_response_code(401)];
            }
        } else {
            return [header('X-PHP-Response-Code: 401', true, 401),http_response_code(401)];
        }
    
           
}
function register($username, $password, $passwordConfirm, $email, $conn){
    $error=false;
    if($this->isValidUsername($username)==1){
        return'ERR-USR-INV';
    }
    if($password!=$passwordConfirm){
        $error=true;
        return'ERR-PW2-MATCH-0';
       
    }
    if($this->isValidPassword($password)==0){
        $error=true;
        return'ERR-PW-LEN-0';
    }
    if((!filter_var($email, FILTER_VALIDATE_EMAIL))){
        return'ERR-EMAIL-INV-0';
    }

  

        // prepare sql and bind parameters
        try{
            if($this->exitsUser($username,$conn)==true){
                return [header('X-PHP-Response-Code: 500', true, 500),http_response_code(500)];
            }
            $pw=password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, password, email)
            VALUES (:username, :password, :email)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $pw);
            $stmt->bindParam(':email', $email);
          
            $stmt->execute();    
        }catch(PDOException $exception){ 
            
            return'ERR-STATUS-500';
        }
        
        return "SUCESS-200";
    }
function exitsUser($username,$conn){
 //Check that username is not already in use, if it is return an error.
 try{
    $stmt = $conn->prepare("SELECT username FROM users WHERE username=:username1");
    $stmt->bindParam(':username1', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
}catch(PDOException $exception){ 
    return "ERR-USEREXITS-LOCAL-0";
}

if ($stmt->rowCount() > 0) {
 
    return true;
}
else{
    return false;
}
}

}