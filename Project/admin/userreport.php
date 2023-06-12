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
	 $q = mysqli_query($con,"select * from user"); 
	 $qr = mysqli_query($con,"select count(*) from user");
	 $rr = mysqli_fetch_array($qr);
	 $row = $rr[0];
	 ?>
	 <table class="table border">
	 	<tr>
	 		<th><b>UID : </b></th>
	 		<th><b>NAME : </b></th>
	 		<th><b>GENDER : </b></th>
	 		<th><b>ADDRESS : </b></th>
	 		<th><b>CONTACT NO : </b></th>
	 		<th><b>EMAIL : </b></th>
	 	</tr>
	 <?php while($r=mysqli_fetch_array($q)){
	 ?>
			<tr>
				<td><?php echo $r['uid']; ?></td>
				<td><?php echo $r['uname']; ?></td>
				<td><?php echo $r['ugender']; ?></td>
				<td><?php echo $r['uaddress']; ?></td>
				<td><?php echo $r['umobno']; ?></td>
				<td><?php echo $r['email']; ?></td>
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