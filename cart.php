
<html>
<head>
	<title>Cart</title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'header.php';?>
<div class="container-md">
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
	<b> <?php echo $r["pname"];?></b>
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
}

?>
<tr>
	<td colspan="5" style="text-align: center	;"><h5>Bill Amount: </h5>
	<h3>₹<?php echo $ftotal;?></h3></td>
	</tr>
<tr>
	<td colspan="5" style="text-align:center;">
		<form>
			<button type="button" class="btn btn-success btn-rounded" onclick="window.location.href='ordercheckout.php';">CHECKOUT</button>
		</form>
	</td>
</tr>
</table>
</div>
<?php require 'footer.php';?>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
