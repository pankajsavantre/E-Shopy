<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shopy</title>
    <link rel="stylesheet" href="style.css">
    <?php include "assets/newcss.php"?>


</head>
<body>
<div class="header" id="top">
    
<nav class="navbar navbar-expand-md sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><span id="brand-first"> <img class="brand-logo" src="img/logo.png"alt=""></span></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon">=</span>
  </button>

  <!-- Navbar links left -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link nav-left active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-left" href="index.php#electronics">Electronics</a>
      </li>
   
      <li class="nav-item ">
        <a class="nav-link nav-left" href="index.php#furniture">Furniture</a>
      </li>
        
    </ul>
  </div>
    <!-- Navbar links right -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
         <?php if(isset($_SESSION['name']))
     { ?>
        <li class="nav-item navlinkimg" id="logout">
        <a class="nav-link nav-right " href="#">
         
          <small class="small">
            <img src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="John Doe" class="rounded-circle" style="width:30px;">
            <span class="namelogin"><?php echo $_SESSION['name'];?></span>
          </small>  &nbsp;
        </a>
      </li>
     <?php }else
     {
      ?>
       <li class="nav-item" data-toggle="modal" data-target="#myModals" id="login">
        <a class="nav-link nav-right"  href="index.php#myModals"><i class="fa fa-user text-dark"></i></a>
        <small class="" style="position:relative;top:-15px">Login</small>
      </li>
    <?php } ?>
      <li class="nav-item">
        <a class="nav-link nav-right" href="track_order.php"><i class="fas fa-truck text-secondary"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-right" href="cart.php"><i class="fas fa-shopping-bag text-secondary"></i>
           <span class="badge badge-pill badge-danger cart-badge"></span>
        </a>
      </li>
      
    </ul>
  </div>
</nav> 
</div>