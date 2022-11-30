<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<?php 
 if(!$_GET['id'] OR empty($_GET['id']) OR $_GET['id'] == '')
 {
 	header('location: feeding.php');

 }else{
 	
 	$nocattle = $feed = $quantity = $feedtime = $comments = "";
 	$id = (int)$_GET['id'];
 	$query = $db->query("SELECT * FROM feeding WHERE id = '$id' ");
 	$fetchObj = $query->fetchAll(PDO::FETCH_OBJ);

 	foreach($fetchObj as $obj){
       $nocattle = $obj->nocattle;
       $feed = $obj->feed;
	   $quantity = $obj->quantity;
	   $feedtime = $obj->feed_time;
	   $comments = $obj->comments;
	    
 	}
 }

?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Cattle Management System > Edit Feeding Program</b></h5>
  </header>
 
 
<div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
  
 	<div class="col-md-6">

     <?php
      if(isset($_POST['submit']))
      {
      	$n_nocattle = $_POST['nocattle'];
      	$n_feed = $_POST['feed'];
      	$n_quantity = $_POST['quantity'];
      	$n_feedtime = $_POST['feed_time'];
      	$n_comments = $_POST['comments'];

      	$n_id = $_GET['id'];

      	$update_query = $db->query("UPDATE feeding SET nocattle = '$n_nocattle',feed = '$n_feed',quantity = '$n_quantity',feed_time = '$n_feedtime',comments = '$n_comments' WHERE id = '$n_id' ");

      	if($update_query){?>
      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Cattle feeding details successfully update <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error updating Cattle feeding data. Please try again <i class="fa fa-times"></i></strong>
        </div>
      	<?php
      }

      }

     ?>




 		<h2>Edit Feeding Program</h2>
	 	<form method="post">
	 		<div class="form-group">
	 			<label class="control-label">No. of Cattle</label>
	 			<input type="text" name="nocattle" class="form-control" value="<?php echo $nocattle; ?>">
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Type of Feed</label>
                 <input type="text" name="feed" class="form-control" value="<?php echo $feed; ?>">
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Quantity</label>
                 <input type="text" name="quantity" class="form-control" value="<?php echo $quantity; ?>">
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Feeding Time</label>
                 <input type="text" name="feed_time" class="form-control" value="<?php echo $feedtime; ?>">
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Comments</label>
	 			<textarea class="form-control" name="comments"><?php echo $comments; ?></textarea>
	 		</div>

	 		<button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Update</button>
	 	</form>
 
 	<a class="btn btn-danger btn-md" onclick="return confirm('Continue delete cattle feeding program ?')" href="delet.php?id=<?php echo $id ?>"><i class="fa fa-trash"></i> Delete Cattle Feeding Program</a>
 </div>
</div>
</div>
</div>