<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Status Update</title>
	<?php require 'head.php' ?>
</head>
<body>
<?php require 'header.php'; ?>
<br>
<div class="container-md" style="text-align:center">
	Choose Status : 
	<form method="POST">
	<select name="sts">
		<option value="Preparing to Dispatch">
		Preparing to Dispatch
	</option>
	<option value="Dispatched">
		Dispatched
	</option>
	<option value="Shipping">
		Shipping
	</option>
	<option value="Delivered">
		Delivered
	</option>

</select>
<input type="submit" name="btnupdate" value="Update">
</form>
<?php
if(isset($_POST['btnupdate'])){
	extract($_POST);
	mysqli_query($con,"update orders set status='$sts' where order_id=".$_GET['order_id']);
	header("location:manageorders.php");
}
 ?>
</div><br><br><br><br><br><br><br><br><br><br>
<?php require 'footer.php'; ?>
</body>
</html>