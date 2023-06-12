<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Checkout</title>
	<?php require "head.php"?>
</head>
<body>
<?php require 'header.php';?>
<br><br>
<div class="container-md border">
	<b>CUSTOMER DETAILS :</b>
<table class="table">
<?php 
$u = mysqli_query($con,"select * from user where uid=".$_SESSION['uid']);
$ui=mysqli_fetch_array($u)
?>
<tr>
	<td><b><b>Name :</b> <?php echo $ui["uname"]; ?><b></td>
	<td><b><b>Contact No : </b><?php echo $ui["umobno"]; ?><b></td>
	<td><b><b>Email : </b><?php echo $ui["email"]; ?><b></td>	
</tr>
<tr>
	<td colspan="3"><b><b>Address :</b> <?php echo $ui["uaddress"]; ?></b></td>
</tr>
</table>
</div>
<br>
<div class="container-md border	">
<b>PRODUCTS :</b>
<form method="POST">
<table class="table">
	<tr>
		<th><b>Product Name</b></th>
		<th><b>Product Price</b></th>
		<th><b>Quantity</b></th>
		<th><b>Total</b></th>
	</tr>

<?php
$q=mysqli_query($con,"select * from cart,tblproduct where tblproduct.pid=cart.pid and cart.uid=".$_SESSION['uid']);
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<td>
	<b>₹ <?php echo $r["pname"];?></b>
</td>
<td>
	<b>₹ <?php echo $r["disc_price"];?></b>
</td>
<td>
	<b><?php echo $r["quantity"];?> packs</b>
</td>

<td>
	<b>₹<?php echo $total= $r["quantity"]*$r["disc_price"];$ftotal+=$total;?></b>
</td>
<td>
	<b><a href="cancel.php?cartid=<?php echo $r['cartid'];?>"> Cancel</a></b>
	</td>
</Tr>
<?php
}?>
<tr>
	<td colspan="5" style="text-align: center	;"><h5>Bill Amount: </h5>
	<h3>₹<?php echo $ftotal;?></h3></td>
	</tr>
	<td colspan="5" style="text-align:center;">
			 <input type="submit" class="btn btn-success btn-rounded" name="payment" value="MAKE PAYMENT"/>
	</td>
</tr>
	<?php
 if(isset($_POST['payment'])){
$q=mysqli_query($con,"select * from cart,tblproduct where tblproduct.pid=cart.pid and cart.uid=".$_SESSION['uid']);
$user_id = $_SESSION['uid'];
$bill = $ftotal;
$numbers = range(999, 999999);
shuffle($numbers);
$orderids = array_shift($numbers);
while ($r=mysqli_fetch_array($q)) {
	$qty = $r['quantity'];
	mysqli_query($con,"insert into orders(order_id,pid,uid,quantity,bill_amt) values('$orderids','".$r['pid']."','$user_id','$qty','$bill')");
}
mysqli_query($con,"delete from cart where uid='$user_id'"); ?>
<script type="text/javascript">
	window.location.href="ordersuccess.php";
</script>
<?php } ?>
</table>
</form>
</div>
<br><br>
<?php require 'footer.php';?>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
