<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Veggie Basket</title>
  <?php require "head.php" ?>
    <!-- Project icon -->
    <link rel="icon" href="img/Logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body style="font-family: Helvetica; background-color:#FBF9F1 ;">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <img src="img/togglebutton.png">
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
        <img style="margin-left: 20px;" 
          src="img/logo1.png"
          height="80"
          alt="Project Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
        if($_SESSION['admin_id']==null){
          ?>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <?php
        }  
       else{
        ?>
         <li class="nav-item">
          <a class="nav-link" href="adminHome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="additems.php">Add Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addcategory.php">Add Category</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="message.php">Messages</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="manageorders.php">Manage Order</a>
        </li>
        <?php
       }
       ?>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

   <div class="d-flex align-items-center" style="margin-right: 10px;">
      <?php
        if($_SESSION['admin_id']==null){
          ?>
          <?php
        }  
       else{
        ?>
        <a class="text-reset me-3" href="logout.php">
        Logout
      </a> 
        <?php
       }
       ?>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</body>
</html>