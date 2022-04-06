<?php
//require_once 'vendor/autoload.php';
  require_once "../../src/classes/Auth.php";
 //use school_inscription_manager-php\classes\Auth;
   require_once "./../../lib/db_connection.php";
   $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";


   $username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
   $auth=new Auth();
if($auth->register($username,$password,$password,$email, $conn)[1]!=500):
  //login
  $auth->login($username,$password, $conn);
   
    header("Location: $actual_link/PHP/school_inscription_manager-php/pages/dasboard.php");
else:
    header("Location: $actual_link/PHP/school_inscription_manager-php/pages/auth/index.php?error=500");
    endif;
  