<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<?php 
 if(!$_GET['id'] OR empty($_GET['id']) OR $_GET['id'] == '')
 {
 	header('location: medicine.php');

 }else{
 	
 	$cattleno = $identifydate = $startdate = $enddate = $nextdate = $type = $dose = $comments = "";
 	$id = (int)$_GET['id'];
 	$query = $db->query("SELECT * FROM medicine WHERE id = '$id' ");
 	$fetchObj = $query->fetchAll(PDO::FETCH_OBJ);

 	foreach($fetchObj as $obj){
       $cattleno = $obj->cattleno;
       $identifydate = $obj->identify_date;
	   $startdate = $obj->start_date;
	   $enddate = $obj->end_date;
	   $nextdate = $obj->next_date;
       $type = $obj->type;
       $dose = $obj->dose;
	   $comments = $obj->comments;
	   
	    
 	}
 }

?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Cattle Management System > Edit Medication</b></h5>
  </header>
 
 
<div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
  
 	<div class="col-md-6">

     <?php
      if(isset($_POST['submit']))
      {
      	$n_cattleno = $_POST['cattleno'];
      	$n_identifydate = $_POST['identify_date'];
      	$n_startdate = $_POST['start_date'];
      	$n_enddate = $_POST['end_date'];
      	$n_nextdate = $_POST['next_date'];
        $n_type = $_POST['type'];
        $n_dose = $_POST['dose'];
      	$n_comments = $_POST['comments'];

      	$n_id = $_GET['id'];

      	$update_query = $db->query("UPDATE medicine SET cattleno = '$n_cattleno',identify_date = '$n_identifydate',start_date = '$n_startdate',end_date = '$n_enddate', next_date = '$n_nextdate', type = '$n_type', dose = '$n_dose',comments = '$n_comments' WHERE id = '$n_id' ");

      	if($update_query){?>
      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Medication details successfully update <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error updating medication data. Please try again <i class="fa fa-times"></i></strong>
        </div>
      	<?php
      }

      }

     ?>




 		<h2>Edit Medication</h2>
	 	<form method="post">
	 		<div class="form-group">
	 			<label class="control-label">Cattle No.</label>
	 			<input type="text" name="cattleno" class="form-control" value="<?php echo $cattleno; ?>">
	 		</div>

	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">Identified Date</label>
	 			<input type="text" name="identify_date" class="form-control" value="<?php echo $identifydate; ?>">
	 		</div>

	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">Start Date</label>
	 			<input type="text" name="start_date" class="form-control" value="<?php echo $startdate; ?>">
	 		</div>

	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">End Date</label>
	 			<input type="text" name="end_date" class="form-control" value="<?php echo $enddate; ?>">
	 		</div>

             <div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">Next Follow Up Date</label>
	 			<input type="text" name="next_date" class="form-control" value="<?php echo $nextdate; ?>">
	 		</div>

             <div class="form-group">
	 			<label class="control-label">Type</label>
	 			<textarea class="form-control" name="type"><?php echo $type; ?></textarea>
	 		</div>

             <div class="form-group">
	 			<label class="control-label">Dose</label>
	 			<textarea class="form-control" name="dose"><?php echo $dose; ?></textarea>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Comments</label>
	 			<textarea class="form-control" name="comments"><?php echo $comments; ?></textarea>
	 		</div>

	 		<button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Update</button>
	 	</form>
 
 	<a class="btn btn-danger btn-md" onclick="return confirm('Continue delete medication ?')" href="deleted.php?id=<?php echo $id ?>"><i class="fa fa-trash"></i> Delete Medication</a>
 </div>
</div>
</div>
</div>