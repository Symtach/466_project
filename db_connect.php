<?php
// Database Connection File
// Used In All Other .php Files
// Through: require 'db_connect.php';
$host = "courses";
$db = "z1998298";
$user = "z1998298"; // MariaDB
$pass = "2004Apr21"; // MariaDB

try{
	$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
	die("Connection failed: " . $e->getMessage());
}
?>
