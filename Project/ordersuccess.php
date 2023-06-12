<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Successful</title>
	<?php require "head.php"?>
</head>
<body>
	<?php require "header.php"; ?>
	<br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<div class="card">
  <img src="img/checkmark.png" class="card-img-top" alt="Ordersuccessful" height="400px" width="100px" />
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;"><u>ORDER SUCCESSFUL</u></h5>
    <p class="card-text">
    	<table class="table border">
				<tr>
    			<th><b>Product name</b></th>
    			<th><b>Product Quanity</b></th>
    			<th><b>Product Price</b></th>
    		</tr>
    		<?php
		$q=mysqli_query($con,"select * from orders,tblproduct where tblproduct.pid=orders.pid and order_date >= NOW() - INTERVAL 2 MINUTE
 and orders.uid=".$_SESSION['uid']);
		while ($r=mysqli_fetch_array($q)) {
			$total = $r["bill_amt"];
		?>
	<Tr>
		<td>
	<b> <?php echo $r["pname"];?></b>
</td>
<td>
	<b><?php echo $r["quantity"];?> packs</b>
</td>
<td>
	<b>₹ <?php echo $r["disc_price"];?></b>
</td>
</Tr>
<?php
}

?>
<tr>
	<td colspan="3" >
		<center><b>Total : ₹ <?php echo $total; ?></b></center>
	</td>
	</tr>
    	</table>

    </p>
    <a href="shop.php" class="btn btn-primary">Continue Shopping</a>
  </div>
</div>
</div>
<div class="col-md-4"></div>
</div><br>
<?php require "footer.php" ?>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>