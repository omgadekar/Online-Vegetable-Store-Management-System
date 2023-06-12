<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <?php require "head.php"?>
</head>
<body>
<div class="container-md">
		<center><img src="img/logo1.png"></center>
		 &nbsp &nbsp &nbsp &nbsp
		<form method="POST">
			<br>
		<select name="yr" >
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
		</select>
		<input class="btn btn-primary" type="submit" name="report" value=" Submit">
	</form>

	 <?php 
	 if(isset($_POST['report'])){
	 	extract($_POST);
	 	$yer = $yr;
	 	$total=0;
	 	$qo = mysqli_query($con,"select count(*) from orders where YEAR(order_date)='$yer'");
		$r = mysqli_fetch_array($qo);
		$totalrow=$r[0];
	 	$q = mysqli_query($con,"select DISTINCT order_id,order_date,status,bill_amt,uname,email,uaddress,umobno from orders,user where orders.uid=user.uid and YEAR(order_date)='$yer'");
	 while($r=mysqli_fetch_array($q)){
	 ?> <br> <?php
	 $total=$total + $r['bill_amt']; ?>
	 <table class="table border">

	<?php $oq = mysqli_query($con,"select * from orders,tblproduct,user where orders.pid=tblproduct.pid and orders.uid=user.uid and order_id=".$r['order_id']); ?>
		
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
<td><center><b><b>Product Quantity :</b></b></center></td>
<td><center><b><b>Product Price :</b></b></center></td>
</tr>
	<?php	while($res=mysqli_fetch_array($oq)){
	 ?>
	 <tr>
	 	<td><b><?php echo $res['pname']; ?></b></td>
	 	<td><b><center><?php echo $res['quantity']; ?></center></b></td>
	 	<td><b><center><?php echo $res['disc_price']; ?></center></b></td>
	 </tr>
<?php } ?>
<tr>
	<td><b><b></b></b></td>
	<td></td>
		<td colspan="3" style="text-align:center;"><b><h6>Total : <?php echo $r['bill_amt']; ?></h6></b></td>

</tr>
</table>
	 <?php } ?>
	 <h3><b> Annual Sales : </b>₹ <?php echo "$total"; ?></h3>
	 <h3><b> Total No of Records : </b><?php echo "$totalrow"; ?></h3>
	 <?php }else{
	 $q = mysqli_query($con,"select DISTINCT order_id,order_date,status,bill_amt,uname,email,uaddress,umobno from orders,user where orders.uid=user.uid");
	 $total=0;
	 $qo = mysqli_query($con,"select count(*) from orders");
		$r = mysqli_fetch_array($qo);
		$totalrow=$r[0]; ?> <br>
	 <?php while($r=mysqli_fetch_array($q)){
	 $total+=$r['bill_amt'];
	 ?>

	 <table class="table border">

	<?php $oq = mysqli_query($con,"select * from orders,tblproduct,user where orders.pid=tblproduct.pid and orders.uid=user.uid and order_id=".$r['order_id']); ?>
		
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
<td><center><b><b>Product Quantity :</b></b></center></td>
<td><center><b><b>Product Price :</b></b></center></td>
</tr>
	<?php	while($res=mysqli_fetch_array($oq)){
	 ?>
	 <tr>
	 	<td><b><?php echo $res['pname']; ?></b></td>
	 	<td><b><center><?php echo $res['quantity']; ?></center></b></td>
	 	<td><b><center><?php echo $res['disc_price']; ?></center></b></td>
	 </tr>
<?php } ?>
<tr>
	<td><b><b></b></b></td>
	<td></td>
	<td colspan="3" style="text-align:center;"><b><h6>Total : <?php echo $r['bill_amt']; ?></h6></b></td>
</tr>
</table>
<?php } ?>
<h3><b> Annual Sales : </b>₹ <?php echo "$total"; ?></h3>
<h3><b> Total No of Records : </b><?php echo "$totalrow"; ?></h3>
<?php } ?>
</div>

<br>
</div>
<center><button class="btn btn-primary" onclick="window.print()">Download Report</button></center><br><br>
</body>
</html>