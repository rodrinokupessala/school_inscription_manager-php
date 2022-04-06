<?php
// Startup
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__. "/..");
$dotenv->load();
///var_dump($_ENV);
$servername = $_ENV['HOST'];
$username = $_ENV['USER_BD'];
$password = $_ENV['PASSWORD_BD'];
$db = $_ENV['BD'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
 
    //echo "Connection failed: " . $e->getMessage();
    }
    
?> 