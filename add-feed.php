<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Cattle Management System > Add New Feeding Program</b></h5>
  </header>
 
 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Add New Feeding Program</h2>

 	<div class="col-md-6">
      
      <?php
      if(isset($_POST['submit']))
      {

	      	$n_nocattle = $_POST['nocattle'];
	      	$n_feed = $_POST['feed'];
	      	$n_quantity = $_POST['quantity'];
            $n_time = $_POST['feed_time'];
            $n_comments = $_POST['comments'];
    
        $query="INSERT INTO feeding(nocattle,feed,quantity,feed_time,comments) VALUES('$n_nocattle','$n_feed','$n_quantity','$n_time','$n_comments') ";
     
      	$insert = $db->query($query);


      	if($insert){?>
      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Feeding Program successfully created <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error creating data. Please try again <i class="fa fa-times"></i></strong>
        </div>
      	<?php
      }
	}
      

     ?>




 		<form method="post" autocomplete="off" enctype="multipart/form-data">
 			<div class="form-group">
	 			<label class="control-label">No. of Cattle</label>
			 <div class="form-group">
			 <select name="nocattle" class="form-control" required>
				    <option></option>
	 				<option value="3">3</option>
					<option value="4">4</option>
	 				<option value="5">5</option>
	 				<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
	 				<option value="9">9</option>
					<option value="10">10</option>
	 			</select>
	 		</div>

	 		<div class="form-group">
             <label class="control-label">Type of Feed</label>
			 <input type="text" name="feed" class="form-control" required>
	 		</div>

	 		<div class="form-group">
             <label class="control-label">Quantity</label>
				 <select name="quantity" class="form-control" required>
				    <option></option>
	 				<option> 60 - 75  kg</option>
					<option> 80 - 100 kg</option>
	 				<option>100 - 125 kg</option>
	 				<option>120 - 150 kg</option>
					<option>140 - 175 kg</option>
					<option>160 - 200 kg</option>
	 				<option>180 - 225 kg</option>
					<option>200 - 250 kg</option>
	 			</select>
	 		</div>

	 		<div class="form-group">
             <label class="control-label">Feeding Time</label>
	 			<input type="text" name="feed_time" class="form-control" required>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Comments</label>
	 			<textarea class="form-control" name="comments" required></textarea>
	 		</div>

	 		<button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Add Feeding Program</button>
 		</form>
 	</div>
 </div>
</div>

</div>