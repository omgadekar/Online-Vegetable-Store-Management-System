<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/mdb.min.css" />
  <?php require "head.php" ?>
</head>
<body>
  <br><br>
	<div class="container-sm">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/car1.png" class="d-block w-100" alt="MainPic"/>
    </div>
    <div class="carousel-item">
      <img src="img/car3.png" class="d-block w-100" alt="DireclyFromFarmtoHome"/>
    </div>
    <div class="carousel-item">
      <img src="img/car2.png" class="d-block w-100" alt="100%Quality"/>
    </div>
  </div>
</div>
</div>
<br><br>

<div class="container-sm">
<h2>Shop with Us </h2> <br>
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
    <h5 class="card-title"> <b><?php echo $r["pname"];?></b></h5>
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
  </div>
</body>
</html>