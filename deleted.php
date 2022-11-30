<?php include 'setting/system.php'; ?>
<?php

if(!$_GET['id'] OR empty($_GET['id']))
{
	header('location: medicine.php');
}else
{
	$id = (int)$_GET['id'];
	$query = $db->query("DELETE FROM medicine WHERE id = $id ");
	if($query){
		header('location: medicine.php');
	}
}