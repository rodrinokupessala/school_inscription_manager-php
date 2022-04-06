<?php 


   session_start();
if(isset( $_SESSION['uid'])){
 
header("Location:".(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"."/PHP/school_inscription_manager-php/pages/dasboard.php"); 
}
else{
  
header("Location:".(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"."/PHP/school_inscription_manager-php/pages/auth"); 
}