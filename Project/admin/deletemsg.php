<?php
require 'head.php';
mysqli_query($con,"delete from contactus where msg_id=".$_GET["msg_id"]);
header("location:message.php");
?>