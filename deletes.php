<?php include 'setting/system.php'; ?>
<?php

if(!$_GET['id'] OR empty($_GET['id']))
{
	header('location: breeding.php');
}else
{
	$id = (int)$_GET['id'];
	$query = $db->query("DELETE FROM breeding WHERE id = $id ");
	if($query){
		header('location: breeding.php');
	}
}