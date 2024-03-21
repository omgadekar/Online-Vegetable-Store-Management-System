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
  <h2 style="text-align:center;">ADMIN PANEL</h2>
  <br><br>
  <div class="d-flex justify-content-evenly">
    <button type="button" class="btn btn-success btn-rounded" onclick="window.location.href='additems.php';">Add Product</button>
    <button type="button" class="btn btn-success btn-rounded" onclick="window.location.href='addcategory.php';">Add Category</button>
    <button type="button" class="btn btn-success btn-rounded" onclick="window.location.href='message.php';">Messages</button>
     <button type="button" class="btn btn-success btn-rounded" onclick="window.location.href='removeproduct.php';">Remove Products</button>
    <button type="button" class="btn btn-success btn-rounded" onclick="window.location.href='manageorders.php';">Manage Orders</button>
    <button type="button" class="btn btn-success btn-rounded" onclick="window.location.href='reports.php';">Generate Reports</button>
  </div><br><br><br>
<?php require "footer.php"?>
</body>
</html>