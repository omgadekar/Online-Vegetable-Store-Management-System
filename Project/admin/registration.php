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
  mysqli_query($con,"insert into admin(admin_email,admin_password,admin_name)values('$txtemail','$txtpass','$txtname')");
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
  	<h2>Create Admin Account</h2></div>
  <div class="card-body">
  	<form action="index.php" method="POST">
     <ul class="list-group list-group-light list-group-small">
     	<li class="list-group-item px-4">Name:</li>
     	<li class="list-group-item px-4"><input type="text" name="txtname" class="form-control" placeholder="First Name Last Name"></li>
    <li class="list-group-item px-4">Email:</li>
    <li class="list-group-item px-4"><input type="email" name="txtemail" class="form-control" placeholder="Email"></li>
    <li class="list-group-item px-4">Create Password:</li>
    <li class="list-group-item px-4"><input type="password" name="txtpass" class="form-control" placeholder="Password"></li>
  </ul>
  <div style="text-align: center;vertical-align: middle;">
   <input type="submit" name="RegBtn" class="btn btn-primary btn-rounded" value="Submit">
    </div>
    </form>
  </div>
  <div class="card-footer text-muted" style="text-align: center;vertical-align: middle;"><a href="login.php">Already an Admin? Login</a></div>
</div>
</div>
</div>
<div class="col-md-4"></div>
</form>
<div><br><br></div>
<?php require "footer.php"?>
</body>
</html>