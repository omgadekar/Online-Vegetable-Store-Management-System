<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <?php require "header.php"?>
  <?php require "head.php"?>
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
  <br><br>
  <h2 style="text-align:center;">Report Generation</h2>
  <br><br>
  <div class="d-flex justify-content-evenly">
    <button type="button" class="btn btn-success btn-rounded" onclick="window.location.href='userreport.php';">User Report</button>
    <button type="button" class="btn btn-success btn-rounded" onclick="window.location.href='orderreport.php';">Orders Report</button>
    <button type="button" class="btn btn-success btn-rounded" onclick="window.location.href='productreport.php';">Product Report</button>
    
  </div><br><br><br>
<?php require "footer.php"?>
</body>
</html>