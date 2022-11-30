<?php include 'setting/system.php'; ?>
<?php

if(!$_GET['id'] OR empty($_GET['id']))
{
	header('location: feeding.php');
}else
{
	$id = (int)$_GET['id'];
	$query = $db->query("DELETE FROM feeding WHERE id = $id ");
	if($query){
		header('location: feeding.php');
	}
}