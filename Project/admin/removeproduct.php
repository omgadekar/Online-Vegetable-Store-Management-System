<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remove Product</title>
</head>
<body>
<?php require 'header.php';?>
<br>
<div class="container-md">
<table class="table">
	<tr>
		<th><b>Product Name</b></th>
		<th><b>Product Price</b></th>
		<th><b>Product Discount Price</b></th>
		<th><b>Stock</b></th>
		<th><b>Product Description</b></th>
	</tr>


<?php
$q=mysqli_query($con,"select * from tblproduct");
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<td>
	<b><?php echo $r["pname"];?></b>
</td>
<td>
	<b>₹ <?php echo $r["pprice"];?></b>
</td>
<td>
	<b>₹ <?php echo $r["disc_price"];?></b>
</td>

<td>
	<b><?php echo $r["stock"];?> packs</b>
</td>
<td>
	<b><?php echo $r["pdescp"];?> packs</b>
</td>
<td>
	<b><a href="remove.php?pid=<?php echo $r['pid'];?>"> REMOVE</a></b>
	</td>
</Tr>
<?php
}

?>
</table>
</div>
<?php require 'footer.php';?>
<script type="text/javascript" src="js/mdb.min.js"></script>
<br>
</body>
</html>