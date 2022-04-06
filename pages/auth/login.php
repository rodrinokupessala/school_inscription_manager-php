<?php
//require_once 'vendor/autoload.php';
  require_once "../../src/classes/Auth.php";
 //use school_inscription_manager-php\classes\Auth;
   require_once "./../../lib/db_connection.php";
   $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  /*
   $username="rodrino23";
   $password="A1234i/*";*/

   $username=$_POST['username_l'];
$password=$_POST['password_l'];
  
   $auth=new Auth();
if($auth->login($username,$password, $conn)[1]!=401):
    echo $actual_link ;
   
    header("Location: $actual_link/PHP/school_inscription_manager-php/pages/dasboard.php");
else:
    header("Location: $actual_link/PHP/school_inscription_manager-php/pages/auth/index.php");
    endif;
  