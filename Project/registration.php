<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require "head.php" ?>
	<?php require "header.php"?>
	<link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body style="font-family: Helvetica;">
<div><br><br></div>
  <?php
if(isset($_POST['RegBtn'])){
  extract($_POST);
  mysqli_query($con,"insert into user(uname,ugender,uaddress,umobno,email)values('$txtname','$inlineRadioOptions','$txtaddress','$txtMobNo','$txtemail')");
  mysqli_query($con,"insert into login(email,password)values('$txtemail','$txtpass')");
  header("location:login.php");
}

?>
<form method="POST">
<div class="row">
	<div class="col-md-4">
	</div>
<div class="col-md-4">
<div class="card text">
  <div class="card-header" style="text-align: center;vertical-align: middle;">
  	<h2>Create Account</h2></div>
  <div class="card-body">
  	<form action="index.php" method="POST">
     <ul class="list-group list-group-light list-group-small">
     	<li class="list-group-item px-4">Name:</li>
     	<li class="list-group-item px-4"><input type="text" pattern="^[a-z]*$ name="txtname" class="form-control" placeholder="First Name Last Name"></li>
     	<li class="list-group-item px-4">Gender:</li>
     	<li class="list-group-item px-4">
     		<div class="form-check form-check-inline">
 			 <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male" />
 			 <label class="form-check-label" for="inlineRadio1">Male</label>
			</div>

			<div class="form-check form-check-inline">
  			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female" />
  			<label class="form-check-label" for="inlineRadio2">Female</label>
			</div>
     	</li>
     	<li class="list-group-item px-4">Mobile No:</li>
     	<li class="list-group-item px-4"><input type="tel" pattern="[0-9]{10}" name="txtMobNo" class="form-control" placeholder="Mobile Number"></li>
    <li class="list-group-item px-4">Email:</li>
    <li class="list-group-item px-4"><input type="email" pattern="[a-z]+[0-9]*@[a-z]+[0-9]*\.[a-z]{2,3}" name="txtemail" class="form-control" placeholder="Email"></li>
    <li class="list-group-item px-4">Create Password:</li>
    <li class="list-group-item px-4"><input type="password" name="txtpass" class="form-control" placeholder="Password"></li>
     	<li class="list-group-item px-4">Address:</li>
		<li class="list-group-item px-4">
  <textarea class="form-control" id="textAreaExample" rows="4" name="txtaddress"></textarea></li>
  </ul>
  <div style="text-align: center;vertical-align: middle;">
   <input type="submit" name="RegBtn" class="btn btn-primary btn-rounded" value="Submit">
    </div>
    </form>
  </div>
  <div class="card-footer text-muted" style="text-align: center;vertical-align: middle;"><a href="login.php">Already have an account? Login</a></div>
</div>
</div>
</div>
<div class="col-md-4"></div>
</form>
<div><br><br></div>
<?php require "footer.php"?>
</body>
</html>