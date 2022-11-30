<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Cattle Management System > Add New Medication</b></h5>
  </header>
 
 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Add New Medication</h2>

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
    
        $query="INSERT INTO medicine(cattleno,identify_date,start_date,end_date,next_date,type,dose,comments) VALUES('$n_cattleno','$n_identifydate','$n_startdate','$n_enddate','$n_nextdate','$n_type','$n_dose','$n_comments') ";
     
      	$insert = $db->query($query);


      	if($insert){?>
      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>New Medication successfully created <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error creatiing medication data. Please try again <i class="fa fa-times"></i></strong>
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

	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">Identified Date</label>
	 			<input type="text" name="identify_date" class="form-control" required>
	 		</div>

	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">Start Date</label>
	 			<input type="text" name="start_date" class="form-control" required>
	 		</div>

	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">End Date</label>
	 			<input type="text" name="end_date" class="form-control" required>
	 		</div>


	 		<div class="form-group date" data-provide="datepicker">
	 			<label class="control-label">Next Follow Up Date</label>
	 			<input type="text" name="next_date" class="form-control" required>
	 		</div>

             <div class="form-group">
	 			<label class="control-label">Type</label>
	 			<textarea class="form-control" name="type" required></textarea>
	 		</div>

             <div class="form-group">
	 			<label class="control-label">Dose</label>
	 			<textarea class="form-control" name="dose" required></textarea>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Comments</label>
	 			<textarea class="form-control" name="comments" required></textarea>
	 		</div>

	 		<button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Add New Medication</button>
 		</form>
 	</div>
 </div>
</div>

</div>