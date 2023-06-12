<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php require "header.php" ?>
	<?php require "head.php" ?>
	<link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
	<table class="table">
	<tr>
		<th><h4>Name</h4></th>
		<td><h4>Email</h4></th>
		<th><h4>Message</h4></th>
	</tr>


<?php
$q=mysqli_query($con,"select * from contactus");
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<td>
	<b><?php echo $r["name"];?></b>
</td>
<td>
	<b><?php echo $r["email"];?></b>
</td>
<td>
	<b><?php echo $r["msg"];?></b>
</td>
<td>
	<a href="deletemsg.php?msg_id=<?php echo $r['msg_id'];?>"> Delete</a>
	</td>
</Tr>
<?php
}

?>
</table>
<?php require "footer.php"?>
</body>
</html>