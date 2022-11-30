<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:285px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Cattle Management System</b></h5>
  </header>
 
 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	  <h2>Breeding Cycle</h2>
     <a id="pdf" href="breed-pdf.php" class="btn btn-sm btn-primary pull-left"><i class="fa fa-pdf"></i>Generate Report</a>
  <a href="add-breeding.php" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Add New Breeding Cycle</a><br><br>
 <div class="table-responsive">
 	  <table class="table table-hover table-striped" id="table">
 		    <thead>
 			      <tr>
 				        <th>S/N</th>
 			          <th>Cattle No.</th>
 				        <th>Breeding Date</th>
 				        <th>Breeding Type</th>
 				        <th>Breeding Status</th>
 				        <th>Expected Birth Date</th>
                <th>Comments</th>
 				<th></th>
 		      	</tr>
 		    </thead>
 		    <tbody>
 			      <?php
       $all_cattle = $db->query("SELECT * FROM breeding");
       $fetch = $all_cattle->fetchAll(PDO::FETCH_OBJ);
        foreach($fetch as $data){ 
        ?>
          <tr>
            <td><?php echo $data->id ?></td>
            <td><?php echo $data->cattleno ?></td>
            <td><?php echo $data->breed_date ?></td>
            <td><?php echo $data->type ?></td>
            <td><?php echo $data->breed_status ?></td>
            <td><?php echo $data->expected_date ?></td>
            <td><?php echo wordwrap($data->comments,300,'<br>'); ?></td>
            <td>
               <div class="dropdown">
                  <button class="btn btn-sm btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-cog"></i> Option
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="edit-breeding.php?id=<?php echo $data->id ?>"><i class="fa fa-edit"></i> Edit</a></li>
                    <li><a onclick="return confirm('Continue delete breeding cycle ?')" href="deletes.php?id=<?php echo $data->id ?>"><i class="fa fa-trash"></i> Delete</a></li>
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