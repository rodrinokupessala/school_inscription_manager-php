<?php
session_start();
 
if(!isset( $_SESSION['uid'])){
 
header("Location:".(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"."/PHP/school_inscription_manager-php/pages/auth"); 
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./../css/css/boxicons.css">
    <link rel="stylesheet" href="./../css/rosoft.css">
    <meta name="viewport" content="with=device-with,initial-scale=1.0">
    <title></title>
    <style>
        
    </style>
  </head>
 