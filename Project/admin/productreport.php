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
	 <?php 
	 $q = mysqli_query($con,"select * from tblproduct"); 
	 $qr = mysqli_query($con,"select count(*) from tblproduct");
	 $rr = mysqli_fetch_array($qr);
	 $row = $rr[0];
	 ?>
	 <table class="table border">
	 	<tr>
	 		<th><b>PID : </b></th>
	 		<th><b>NAME : </b></th>
	 		<th><b>PRICE : </b></th>
	 		<th><b>DISCOUNTED PRICE : </b></th>
	 		<th><b>PRODUCT DECRIPTION : </b></th>
	 		<th><b>STOCK : </b></th>
	 	</tr>
	 <?php while($r=mysqli_fetch_array($q)){
	 ?>
			<tr>
				<td><?php echo $r['pid']; ?></td>
				<td><?php echo $r['pname']; ?></td>
				<td><?php echo $r['pprice']; ?></td>
				<td><?php echo $r['disc_price']; ?></td>
				<td><?php echo $r['pdescp']; ?></td>
				<td><?php echo $r['stock']; ?></td>
			</tr>

<?php } ?>
<tr>
	<td colspan="6"><b><b><center>Total No of Rows : <?php echo $row;?></center></b></b></td>
</tr>
</table>
<center><button class="btn btn-rounded btn-primary" onclick="window.print()">Download Report</button>
</center>
</div>
<br>
</body>
</html>