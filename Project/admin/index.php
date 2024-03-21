<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require "header.php"?>
  <?php require "head.php" ?>
  <link rel="stylesheet" href="css/mdb.min.css" />
  <style type="text/css">.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  font-family: "Helvetica";
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}</style>
</head>
<body>
  <div><br><br></div>
  <?php
if(isset($_POST['LgnBtn'])){
  extract($_POST);
  $q=mysqli_query($con,"select * from admin where admin_email='$txtemail' and admin_password='$txtpass'");
  if(mysqli_num_rows($q)>0){
    $_SESSION["admin_email"]=$txtemail;
    $q1=mysqli_query($con,"select * from admin where admin_email='".$_SESSION['admin_email']."'");
    $r1=mysqli_fetch_array($q1);
    $_SESSION["admin_id"]=$r1["admin_id"];
    header("location:adminHome.php");
  }
  else{
   echo"<div class='alert'>
    <span class='closebtn' onclick='this.parentElement.style.display='none';''>&times;</span> 
    <strong>Invalid Credentials</strong> 
    </div>";
}
}
?>
<div class="col-md-2">
</div>
<div class="d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <img src="img/keyboard.jpg" class="card-img-top" alt="Keyboard"/>
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">ADMIN LOGIN</h5>
  </div>
  <form method="POST">
  <ul class="list-group list-group-light list-group-small">
    <li class="list-group-item px-4">Admin Email:</li>
    <li class="list-group-item px-4"><input type="email" name="txtemail" class="form-control" placeholder="Email"></li>
    <li class="list-group-item px-4">Admin Password:</li>
    <li class="list-group-item px-4"><input type="password" name="txtpass" class="form-control" placeholder="Password"></li>
  </ul>
  <div class="card-body" style="text-align: center;vertical-align: middle;" >
    <input type="submit" name="LgnBtn" class="btn btn-primary btn-rounded" value="Login"> <br><br>
    </form>
    <a href="registration.php">Don't have admin account? Create an account</a>
  </div>
</div>
</div>
<div><br><br></div>
<?php require "footer.php"
?>

</body>
</html>