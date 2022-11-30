<?php
 $pCount = $uCount = $bCount = $cCount = $nCount = $qCount = $jCount = $tCount = '';

 $query = $db->query("SELECT * FROM cattles");
 $pCount = $query->rowCount();

 $quer = $db->query("SELECT * FROM breed");
 $bCount = $quer->rowCount();

 $que = $db->query("SELECT * FROM quarantine");
 $qCount = $que->rowCount();

 $que = $db->query("SELECT * FROM pregnant");
 $cCount = $que->rowCount();

 $que = $db->query("SELECT * FROM feeding");
 $nCount = $que->rowCount();

 $que = $db->query("SELECT * FROM breeding");
 $jCount = $que->rowCount();

 $que = $db->query("SELECT * FROM medicine");
 $tCount = $que->rowCount();

 $qu = $db->query("SELECT * FROM admin");
 $uCount = $qu->rowCount();

?>


<div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-list w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $pCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Cattle</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $qCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Quarantine</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-list w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $bCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Breeds
        </h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-brown w3-padding-16">
        <div class="w3-left"><i class="fa fa-star w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $cCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Pregnant</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-star w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $nCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Cattle Feeding</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-pink w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $jCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Cattle Breeding</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-yellow w3-padding-16">
        <div class="w3-left"><i class="fa fa-list w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $tCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Medication</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $uCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>