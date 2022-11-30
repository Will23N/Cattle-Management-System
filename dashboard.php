<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>
 
 <?php include 'inc/data.php'; ?>
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Recent Cattle</h2>
 <div class="table-responsive">
 	<table class="table table-hover" id="table">
 		<thead>
 			<tr>
 				<th>S/N</th>
 				<th>Cattle No.</th>
 				<th>Breed</th>
 				<th>Weight</th>
 				<th>Gender</th>
 				<th>Arrived</th>
 				<th>Desc.</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
               $qpi = $db->query("SELECT * FROM cattles ORDER BY id");
               $result = $qpi->fetchAll(PDO::FETCH_OBJ);
               $c = $qpi->rowCount();

               foreach ($result as $j) {
               	 $cattlename = $j->cattleno;
               	 $b_id = $j->breed_id;
               	 $weight = $j->weight;
               	 $gender = $j->gender;
               	 $remark = $j->remark;
               	 $arr = $j->arrived;

               	 $k = $db->query("SELECT * FROM breed WHERE id = '$b_id' ");
               	 $ks = $k->fetchAll(PDO::FETCH_OBJ);
               	 foreach ($ks as $r) {
               	 	$bname = $r->name;
               	 ?>
                  <tr>
                  	<td><?php echo $j->id;?></td>
                  	<td><?php echo $cattlename; ?></td>
                  	<td><?php echo $bname; ?></td>
                  	<td><?php echo $weight; ?></td>
                  	<td><?php echo $gender; ?></td>
                  	<td><?php echo $arr; ?></td>
                  	<td><?php echo $remark; ?></td>
                  </tr>
               	 <?php
                 }
				}
 			?>
 		</tbody>
 	</table>
 </div>
 </div>
</div>


</div>

