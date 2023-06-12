<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Download Invoice</title>
	<?php require "head.php"?>
</head>
<body>
<div class="container-md">
		<center><img src="img/logo1.png"></center>
	 <?php 
	 $q = mysqli_query($con,"select DISTINCT order_id,order_date,status,bill_amt,uname,email,uaddress,umobno from orders,user where orders.uid=user.uid and orders.order_id=".$_GET['order_id']);
	 while($r=mysqli_fetch_array($q)){
	 ?>
	 <table class="table border">

	<?php $oq = mysqli_query($con,"select * from orders,tblproduct,user where orders.pid=tblproduct.pid and orders.uid=user.uid and order_id=".$r['order_id']); ?>
		<tr><td colspan="3" style="text-align:left"><h5>ORDER DETAILS</h5></td></tr>
	  	<tr><td><b><b> Order ID :</b> <?php echo $r['order_id']; ?></b></td>
	  		<td><b><b>Order Time :</b> <?php echo $r['order_date'];?></b></td>
	  		<td></td>
	  	</tr>
	  	<tr>
	  		<td style="text-align:left"><b><b>Name : </b><?php echo $r['uname'] ?></b></td>
	  		<td><b><b>Contact No : </b><?php echo $r['umobno'] ?></b></td>
	  		<td><b><b>Email Address : </b><?php echo $r['email'] ?></b></td>
	  	</tr>
	  	<tr>
	  		<td colspan="3" style="text-align:left"><b><b>Shipping Address :</b> <?php echo $r['uaddress'] ?></b></td>
	  	</tr>
	  	<tr>
<td><b><B>Product Name :</B></b></td>
<td><b><b>Product Quantity :</b></b></td>
<td><b><b>Product Price :</b></b></td>
</tr>
	<?php	while($res=mysqli_fetch_array($oq)){
	 ?>
	 <tr>
	 	<td><b><?php echo $res['pname']; ?></b></td>
	 	<td><b><center><?php echo $res['quantity']; ?></b></td>
	 	<td><b><?php echo $res['disc_price']; ?></b></td>
	 </tr>
<?php } ?>
<tr>
	<td><b><b>CUSTOMER INVOICE</b></b></td>
	<td></td>
	<td><b><h6>Total : <?php echo $r['bill_amt']; ?></h6></b></td>
</tr>
</table>
<?php } ?>
<button class="btn btn-rounded btn-primary" onclick="window.print()">Download Invoice</button>
</div>
<br>
</body>
</html>