<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Profile</title>
	<?php require 'head.php' ?>
</head>
<body>
<?php require 'header.php'?> 
<div><br><br></div>
<?php 
$u = mysqli_query($con,"select * from user where uid=".$_SESSION['uid']);
$ui=mysqli_fetch_array($u)
?>
<div class="col-md-2">
</div>
<div class="d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <img src="img/logo1.png" class="card-img-top container-fluid" alt="Keyboard"/>
  <div class="card-body">
    <h3 class="card-title" style="text-align:center;"><b>MY PROFILE</b></h3>
     
  </div>
  <ul class="list-group list-group-light list-group-small">
    <li class="list-group-item px-4"><b>Name: </b><?php echo $ui['uname']; ?></li>
    <li class="list-group-item px-4"><b>Email: </b><?php echo $ui['email']; ?></li>
    <li class="list-group-item px-4"><b>Contact No: </b><?php echo $ui['umobno']; ?></li>
     <li class="list-group-item px-4"><b>Address: </b><?php echo $ui['uaddress']; ?></li>
 
  </ul>
  </div>
</div>
</div>
<div><br><br></div>
<?php require 'footer.php'?>
</body>
</html>