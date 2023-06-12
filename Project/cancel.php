<?php
require 'head.php';
mysqli_query($con,"delete from cart where cartid=".$_GET["cartid"]);
header("location:cart.php");
?>