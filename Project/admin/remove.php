<?php
require 'head.php';
mysqli_query($con,"delete from tblproduct where pid=".$_GET["pid"]);
header("location:removeproduct.php");
?>