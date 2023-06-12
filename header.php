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
       
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->

    <div class="d-flex align-items-center" style="margin-right: 10px;">
      <!-- Icon -->
       <?php
        if($_SESSION['uid']!=null){
          ?>
      <a class="text-reset me-3" href="cart.php"> <?php } else{ ?>
        <a class="text-reset me-3" href="login.php">
     <?php } ?>
        <img src="img/Logo.png" height="50px" width="50px" style="margin-right: 10px;">
      </a>
      <?php
        if($_SESSION['uid']==null){
          ?>
             <a class="text-reset me-3" href="login.php">
        Login
      </a> 
          <?php
        }  
       else{
        ?>
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="img/LoginIcon.png"
            class="rounded-circle"
            height="25"
            alt="LoginIcon"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="myprofile.php">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="myorders.php">My Orders</a>
          </li>
          <li>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </li>
        </ul>
      </div></div>    <?php
       }
       ?>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
 
</body>
</html>