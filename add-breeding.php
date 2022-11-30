<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Cattle Management System > Add New Breeding Cycle</b></h5>
  </header>
 
 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Add New Breeding Cycle</h2>

 	<div class="col-md-6">
      
	 <!-- Process data when form is submitted -->
      <?php
      if(isset($_POST['submit']))
      {

	      	$n_cattleno = $_POST['cattleno'];
	      	$n_type = $_POST['type'];
			$n_breeddate = $_POST['breed_date'];
			$n_expecteddate = $_POST['expected_date'];
	      	$n_breedstatus = $_POST['breed_status'];
            $n_comments = $_POST['comments'];
    
		// Prepare an insert statement
        $query="INSERT INTO breeding(cattleno,type,expected_date,breed_date,breed_status,comments) VALUES('$n_cattleno','$n_type','$n_breeddate','$n_expecteddate','$n_breedstatus','$n_comments') ";
     
      	$insert = $db->query($query);


      	if($insert){?>
      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Breeding Cycle successfully created <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error creatiing data. Please try again <i class="fa fa-times"></i></strong>
        </div>
      	<?php
      }
	}
      

     ?>




 		<form method="post" autocomplete="off" enctype="multipart/form-data">
 			<div class="form-group">
	 			<label class="control-label">Cattle No.</label>
			 <div class="form-group">
	 			<select name="cattleno" class="form-control" required>
	 				<option value=""></option>
	 				<?php
	                   $getcattleno = $db->query("SELECT * FROM cattles");
	                   $res = $getcattleno->fetchAll(PDO::FETCH_OBJ);
	                   foreach($res as $r){ ?>
	                     <option value="<?php echo $r->cattleno; ?>"><?php echo $r->cattleno; ?></option>   
	                   <?php
	                   }
	 				?>
	 			</select>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Breeding Type</label>
                 <select name="type" class="form-control" required>
				    <option></option>
	 				<option value="Artificial Insemination">Artificial Insemination</option>
	 				<option value="Natural Insemination">Natural Insemination</option>
	 			</select>
	 		</div>

	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">Breeding Date</label>
	 			<input type="text" name="breed_date" class="form-control" required>
	 		</div>

	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">Expected Birth Date</label>
	 			<input type="text" name="expected_date" class="form-control" required>
	 		</div>


	 		<div class="form-group">
	 			<label class="control-label">Breeding Status</label>
	 			<select name="breed_status" class="form-control" required>
				    <option></option>
	 				<option value="Observation">Observation</option>
	 				<option value="Success">Success</option>
	 				<option value="Failed">Failed</option>
	 			</select>
	 		</div>


	 		<div class="form-group">
	 			<label class="control-label">Comments</label>
	 			<textarea class="form-control" name="comments" required></textarea>
	 		</div>

	 		<button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Add Breeding Cycle</button>
 		</form>
 	</div>
 </div>
</div>

</div>
