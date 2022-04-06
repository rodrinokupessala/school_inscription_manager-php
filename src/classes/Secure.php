<?php
    
    //namespace school_inscription_manager\classes\Secure;
/**
 * Secure.php
 *
 * This file contains all for security of my php functions that are used throught
 * this project. This file in included in many other php files in 
 * also included in this project.
 *
 
 * @copyright  2022 Rodrino Adolfo Kupessala< https://github.com/rodrinokupessala>
 * @version    Release: 1.0
 **/ 
 class   Secure {
     
/**
 * I could have jused used session_start() but this function is widely used and adds extra security.
 * 
 * @author Rodrino Adolfo Kupessala<rkupessala@gmail.com> 
 */ 
 function sec_session_start($rulRedirect) {
    define("SECURE", FALSE); 
    $session_name = 'sec_session_id';   // Set a custom session name 
    $secure = SECURE;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location:http://$rulRedirect?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one. 
}
public function xssPrevent($data='') {
 
return  preg_replace("/[^a-zA-Z0-9_\-]+/", "", $data); //XSS Security
   
           
}
function isValidUsername($username) {
    return preg_match("/[^a-zA-Z0-9]+/", $username);
}

//Password complexity as per https://technet.microsoft.com/en-us/library/cc786468(v=ws.10).aspx
function isValidPassword($password) {
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    
    if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        return 0;
    }else{
        return 1;
    }
}
function optionHash(){
    return     ['cost' => 12];
}
}
