
<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>
<?php require 'header.php';?>
<?php
if(isset($_POST["btnsave"])){
	extract($_POST);
	mysqli_query($con,"insert into category(cname)values('$txtcname')");
	header("location:additems.php");
}

?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
<form method="post">
	<table class="table">
		<tr>
			<tD>
				<b>Category Name</b>
			</tD>
			<td>
				<input type="text" class="form-control" name="txtcname">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" class="btn btn-success" name="btnsave" value="Add Category">		
			</td>
		</tr>
	</table>
</form>
	</table>
</div>
	</div>
<?php require 'footer.php';?>
</body>
</html>