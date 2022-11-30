<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Cattle Management System</b></h5>
  </header>
 
 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	  <h2>Medication</h2>
     <a id="pdf" href="med-pdf.php" class="btn btn-sm btn-primary pull-left"><i class="fa fa-pdf"></i>Generate Report</a>
  <a href="add-medicine.php" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Add New Medication</a><br><br>
 <div class="table-responsive">
 	  <table class="table table-hover table-striped" id="table">
 		    <thead>
 			      <tr>
 				        <th>S/N</th>
 				        <th>Cattle No.</th>
 				        <th>Identified Date</th>
 				        <th>Start Date</th>
 				        <th>End Date</th>
 				        <th>Next Follow Up Date</th>
                <th>Type</th>
                <th>Regular Dose</th>
                <th>Comments</th>
 				<th></th>
 			      </tr>
 		    </thead>
 		    <tbody>
 		      	<?php
       $all_cattle = $db->query("SELECT * FROM medicine");
       $fetch = $all_cattle->fetchAll(PDO::FETCH_OBJ);
        foreach($fetch as $data){ 
        ?>
          <tr>
            <td><?php echo $data->id ?></td>
            <td><?php echo $data->cattleno ?></td>
            <td><?php echo $data->identify_date ?></td>
            <td><?php echo $data->start_date ?></td>
            <td><?php echo $data->end_date ?></td>
            <td><?php echo $data->next_date ?></td>
            <td><?php echo wordwrap($data->type,300,'<br>'); ?></td>
            <td><?php echo wordwrap($data->dose,300,'<br>'); ?></td>
            <td><?php echo wordwrap($data->comments,300,'<br>'); ?></td>
            <td>
               <div class="dropdown">
                  <button class="btn btn-sm btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-cog"></i> Option
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="edit-medicine.php?id=<?php echo $data->id ?>"><i class="fa fa-edit"></i> Edit</a></li>
                    <li><a onclick="return confirm('Continue delete medication ?')" href="deleted.php?id=<?php echo $data->id ?>"><i class="fa fa-trash"></i> Delete</a></li>
                  </ul>
                </div> 
            </td>
          </tr>    
      <?php 
       }
        
      ?>
 		    </tbody>
 	  </table>
 </div>
 </div>
</div>


</div>