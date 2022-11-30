<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<?php 
 if(!$_GET['id'] OR empty($_GET['id']) OR $_GET['id'] == '')
 {
 	header('location: breeding.php');

 }else{
 	
 	$cattleno = $type = $expecteddate = $breeddate = $breedstatus = $comments = "";
 	$id = (int)$_GET['id'];
 	$query = $db->query("SELECT * FROM breeding WHERE id = '$id' ");
 	$fetchObj = $query->fetchAll(PDO::FETCH_OBJ);

 	foreach($fetchObj as $obj){
       $cattleno = $obj->cattleno;
       $type = $obj->type;
	   $expecteddate = $obj->expected_date;
	   $breeddate = $obj->breed_date;
	   $breedstatus = $obj->breed_status;
	   $comments = $obj->comments;
	   
	    
 	}
 }

?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Cattle Management System > Edit Breeding Cycle</b></h5>
  </header>
 
 
<div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
  
 	<div class="col-md-6">

     <?php
      if(isset($_POST['submit']))
      {
      	$n_cattleno = $_POST['cattleno'];
      	$n_type = $_POST['type'];
      	$n_expecteddate = $_POST['expected_date'];
      	$n_breeddate = $_POST['breed_date'];
      	$n_breedstatus = $_POST['breed_status'];
      	$n_comments = $_POST['comments'];

      	$n_id = $_GET['id'];

      	$update_query = $db->query("UPDATE breeding SET cattleno = '$n_cattleno',type = '$n_type',expected_date = '$n_expecteddate',breed_date = '$n_breeddate', breed_status = '$n_breedstatus',comments = '$n_comments' WHERE id = '$n_id' ");

      	if($update_query){?>
      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Cattle breeding details successfully update <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error updating Cattle breeding data. Please try again <i class="fa fa-times"></i></strong>
        </div>
      	<?php
      }

      }

     ?>




 		<h2>Edit Breeding Cycle</h2>
	 	<form method="post">
	 		<div class="form-group">
	 			<label class="control-label">Cattle No.</label>
	 			<input type="text" name="cattleno" class="form-control" value="<?php echo $cattleno; ?>">
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Breeding Type</label>
                 <select name="type" class="form-control">
	 				<option hidden value="<?php echo $type; ?>" ><?php echo $type ?></option>
	 				<option>Artificial Insemination</option>
	 				<option>Natural Insemination</option>
	 			</select>
	 		</div>

	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">Breeding Date</label>
	 			<input type="text" name="breed_date" class="form-control" value="<?php echo $breeddate; ?>">
	 		</div>

	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">Expected Birth Date</label>
	 			<input type="text" name="expected_date" class="form-control" value="<?php echo $expecteddate; ?>">
	 		</div>

             <div class="form-group">
	 			<label class="control-label">Breeding Status</label>
                 <select name="breed_status" class="form-control">
	 				<option hidden value="<?php echo $breedstatus; ?>" ><?php echo $breedstatus; ?></option>
                    <option value="Observation">Observation</option>
	 				<option value="Success">Success</option>
	 				<option value="Failed">Failed</option>
	 			</select>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Comments</label>
	 			<textarea class="form-control" name="comments"><?php echo $comments; ?></textarea>
	 		</div>

	 		<button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Update</button>
	 	</form>
 
 	<a class="btn btn-danger btn-md" onclick="return confirm('Continue delete cattle breeding cycle ?')" href="deletes.php?id=<?php echo $id ?>"><i class="fa fa-trash"></i> Delete Cattle Breeding Cycle</a>
 </div>
</div>
</div>
</div>