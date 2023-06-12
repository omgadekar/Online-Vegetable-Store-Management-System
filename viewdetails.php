
<html>
<head>
	<title>Veggie Basket</title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'header.php';?>
<?php
if(isset($_POST["btnaddcart"])){
	if($_SESSION['uid']==null){ header("location:login.php");}else{
extract($_POST);
$q=mysqli_query($con,"select * from tblproduct where pid=".$_GET['pid']);
$r=mysqli_fetch_array($q);
if($txtqty <= $r['stock']){
$oldstock = $r['stock'];
$newstock = $oldstock - $txtqty;
mysqli_query($con,"insert into cart(uid,pid,quantity,dprice)values('".$_SESSION['uid']."','".$_GET["pid"]."','$txtqty','".$r['disc_price']."')");
mysqli_query($con,"update tblproduct set stock='$newstock' where pid=".$_GET['pid']);
header("location:shop.php");
}elseif($txtqty > $r['stock']){ ?>
<script type="text/javascript">
	alert("OUT OF STOCK");
</script>
<?php
}
}
}
?>	
<div class="row">
<?php
$q=mysqli_query($con,"select * from tblproduct where pid=".$_GET['pid']);
	while ($r=mysqli_fetch_array($q)) {
		?>
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<div class="card">
	 		<?php echo "<img src='admin/images/".$r['pimage']."' >"; ?>
	  <div class="card-body">
	    <h5 class="card-title"><?php
		echo $r["pname"];?></h5>	
	    <p class="card-text">
	    	<form method="post">
	    	<table class="table">
    		<tR>
    			<td>
    			<b>MRP:</b>	₹<strike><b><?php echo $r['pprice'];?></b></strike>/-
    			</td>
    		</tR>
    		<tR>
    			<td>
    			<b>Discounted Price:</b>	₹<b><?php echo $r['disc_price'];?></b>/-
    			</td>
    		</tR>
    		<tr>
    			<td><b>Description :</b><br><br>
    				 <p class="card-text"><b><?php echo $r["pdescp"];?></b></p>
    			</td>
    		</tr>
    		<Tr>
    		
    			<td>
    				<input type="number" min="1"  name="txtqty" class="form-control" placeholder="Enter Quantity">
    			</td>
    		</Tr>
    		<tr>
    			<Td>
    				<input type="submit" name="btnaddcart" value="Add to Cart" class="btn btn-success">
    			</Td>
    		</tr>
    	</table>
    </form>


    </p>
    
  </div>
</div>
</div>
<?php
}

?>
<?php require 'footer.php';?>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>