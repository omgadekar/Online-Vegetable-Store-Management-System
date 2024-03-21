<html>
<head>
	<title>Admin</title>
	<?php require 'head.php';?>
</head>
<body>
<?php require 'header.php';?>
<?php
if(isset($_POST["btnaddproduct"])){
	$msg = "";
	extract($_POST);
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);
	mysqli_query($con,"insert into tblproduct(cid,pname,pprice,disc_price,pdescp,stock,pimage)values('$cmbcategory','$txtpname','$txtpprice','$txtpdprice','$txtpdesc','$txtstock','$image')");
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
<form method="post" enctype="multipart/form-data">
	<table class="table">
		<tR>
			<td>
				<b>Choose Category</b>
			</td>
			<td>
				<select name="cmbcategory" class="form-control">
					<?php
						$q=mysqli_query($con,"select * from category");
						while ($r=mysqli_fetch_array($q)) {
							?>
							<option value="<?php echo $r['cid'];?>"><?php echo $r["cname"];?></option>
							<?php
						}
					?>
				</select>
		</tR>
		<tr>
			<tD>
				<b>Product Name</b>
			</tD>
			<td>
				<input type="text" class="form-control" name="txtpname">
			</td>
		</tr>
		<tr>
			<tD>
				<b>Product Price</b>
			</tD>
			<td>
				<input type="text" class="form-control" name="txtpprice">
			</td>
		</tr>
		<tr>
			<tD>
				<b>Product Discount Price</b>
			</tD>
			<td>
				<input type="text" name="txtpdprice" class="form-control">
			</td>
		</tr>
		<tr>
			<tD>
				<b>Product Description</b>
			</tD>
			<td>
				<textarea name="txtpdesc" class="form-control"></textarea>
			</td>
		</tr>
		<tr>
			<tD>
				<b>Stock (in KG) </b>
			</tD>
			<td>
				<input type="text" class="form-control" name="txtstock">
			</td>
		</tr>
		
		<tr>
			<tD>
				<b>Product Image (Image Dimension : 500px X 500px only)</b>
			</tD>
			<td>
				<input type="file" class="form-control" name="image">
			</td>
		</tr>

		<tr>
			<td colspan="2" align="center">
				<input type="submit" class="btn btn-success" name="btnaddproduct" value="Add Product">		
			</td>
		</tr>
	</table>
</form>
</div>
<?php require 'footer.php';?>
</body>
</html>