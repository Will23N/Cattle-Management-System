<?php 
include 'setting/system.php';

if(isset($_POST['removes'])){
	$id=$_POST['selector'];
    $N = count($id);
	for($i=0; $i < $N; $i++)
	{
		 $query = $db->query("DELETE FROM pregnant where id ='$id[$i]'");
	}
    header("location: manage-pregnant.php");
}
?>
