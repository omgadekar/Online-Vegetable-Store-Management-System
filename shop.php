<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop</title>
	<?php require "head.php" ?>
</head>
<body>
<?php require "header.php";
?>
<br>
<div class="row">
	<div class="col-md-2 border">
		
		&nbsp&nbsp FILTERS :
		<?php 
			$cq = mysqli_query($con,"select * from category");
			while($cr=mysqli_fetch_array($cq)){
		?>
		<div class="form-check" style="margin-left:20px;">
  <a href="filtered_shop.php?cid=<?=$cr['cid']?>"><?php echo $cr['cname']?></a>
</div>
<?php } ?><br>&nbsp&nbsp
<a href="shop.php" class="btn btn-primary btn-rounded">CLEAR FILTER</a>
	</div>
	<div class="col-md-10">
	<div class="container-sm">
		<div class="row">
			<?php 
$q=mysqli_query($con,"select * from tblproduct");
while ($r=mysqli_fetch_array($q)) {
	?>
			<div class="col-md-3">
		<div class="card">
			<?php echo "<img src='admin/images/".$r['pimage']."' >"; ?>
			<form method="GET">
  <div class="card-body">
    <h5 class="card-title">	<b><?php echo $r["pname"];?></b></h5>
    <p class="card-text">MRP : ₹<b><strike style="text-decoration-thickness: 3px;"><?php echo $r["pprice"];?></strike></b></p>
    <p class="card-text">DISCOUNTED PRICE : ₹<b><?php echo $r["disc_price"];?></b></p>
    <p class="card-text"><b><?php echo $r["pdescp"];?></b></p>
   <a href="viewdetails.php?pid=<?=$r['pid']?>">View Details</a>
  </form>
  </div>
</div>
<br>
</div>
<?php } ?>
<br>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>	