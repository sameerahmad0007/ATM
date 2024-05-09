<?php
include("config.php");
include("head.php");
session_start();
 $id = $_SESSION['user_id'];
  
  $sql = "select * from user where user_id='$id'";
  $data = mysqli_query($conn,$sql);
  foreach($data as $id){
  $name = $id['user_name'];
  $contact = $id['user_contact'];
  $pan = $id['user_pan'];
  $address = $id['user_address'];
  $account = $id['user_amount'];
  }
?>
<div class="container position-absolute top-50 start-50 translate-middle w-50">
<div class="container text-center">
  <div class="row">
    <div class="col">
    <ul class="list-group ">
  <li class="list-group-item " aria-disabled="true"> <b>NAME : </b><?php echo "$name"; ?></li>
  <li class="list-group-item"><b>CONTACT : </b><?php echo "$contact"; ?></li>
  <li class="list-group-item"><b>PAN-CARD NUMBER: </b><?php echo "$pan"; ?></li>
  <li class="list-group-item"><b>ADDRESS : </b><?php echo "$address"; ?></li>
  <li class="list-group-item"><b>AMOUNT : </b><?php echo "$account"; ?></li>
</ul>
    </div>
  </div>
 <h3 class="text-light">click here to withdrawal amount from your account</h3>
  <button type="button" name="button" class="btn btn-primary btn-lg "><a href=withdrawal.php class="text-light">WITHDRAWAL-AMOUNT </a></button>
</div>

</div>