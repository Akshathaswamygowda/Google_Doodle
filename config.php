<?php
ob_start(); //output buffering
try{
	$con = new PDO("mysql:dbname=heroku_6d71e0a64f79d2b;host=us-cdbr-iron-east-04.cleardb.net", "b7d085ca5a1e5d", "2a0446ac");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}
catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();

}
?>
