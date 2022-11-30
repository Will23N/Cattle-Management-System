<?php
// Check connection
try {
	$db = new PDO('mysql:host=localhost;dbname=project','root','william99');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die('<h4 style="color:red">Incorrect Connection Details</h4>');
}