<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php require "header.php"?>
  <?php require "head.php"?>
	<link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
   <?php
if(isset($_POST['ContactBtn'])){
  extract($_POST);
  $q=mysqli_query($con,"insert into contactus(name,email,msg) values('$txtname','$txtemail','$txtmsg')"); 
  header("location:index.php");
}
  ?>
  <div><br><br></div>
<div class="col-md-2">
</div>
<div class="d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <img src="img/logo1.png" class="card-img-top container-fluid" alt="Keyboard"/>
  <div class="card-body">
    <h3 class="card-title" style="text-align:center;"><b>Contact Us</b></h3>
      <h6 class="card-title" style="text-align:center;">Let's start a Conversation</h6>
  </div>
  <form method="POST">
  <ul class="list-group list-group-light list-group-small">
    <li class="list-group-item px-4">Name:</li>
    <li class="list-group-item px-4"><input type="text" name="txtname" class="form-control" placeholder="Name"></li>
    <li class="list-group-item px-4">Email:</li>
    <li class="list-group-item px-4"><input type="email" name="txtemail" class="form-control" placeholder="Email"></li>
      <li class="list-group-item px-4">Message:</li>
    <li class="list-group-item px-4"><textarea name="txtmsg" style="width: 250px;"></textarea></li>
  </ul>
  <div class="card-body" style="text-align: center;vertical-align: middle;" >
    <input type="submit" name="ContactBtn" class="btn btn-primary btn-rounded" value="Submit"> <br><br>
    </form>
  </div>
</div>
</div>
<div><br><br></div>
<?php require "footer.php"?>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>