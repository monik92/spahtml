<?php
$host = "localhost";
$db_name = "bdatosspa";
$username = "root";
$password = "12345";

try {
	$con = new PDO("mysql:host={$host};dbname={$db_name};port=3307", $username, $password);
}

// to handle connection error
catch(PDOException $exception){
	echo "Connection error: " . $exception->getMessage();
}
?>