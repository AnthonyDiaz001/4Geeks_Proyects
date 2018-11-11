<!DOCTYPE html>

<html lang="es-VE">

<head>

  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

  <title> <?php echo $pageTitle;?> </title>

  <!--For Local Purposes-->
  <link rel="stylesheet" href="css/myStyle.css">
  <link rel="stylesheet" href="css/Bootstrap/css/bootstrap.min.css">

  <!--For Online Purposes-->

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body class="myBackground">

<div class="myHeader"></div>

<ul>
  <li class="<?php if ($section == "main menu") {echo "myCurrentPage";}?>"><a href="index.php" title="Main menu">Main menu</a></li>
  <li class="<?php if ($section == "products") {echo "myCurrentPage";}?>"><a href="products.php" title="Products">Products</a></li>
  <li class="<?php if ($section == "payment") {echo "myCurrentPage";}?>"><a href="payment.php" title="Payment options">Payment options</a></li>
  <li class="<?php if ($section == "delivery") {echo "myCurrentPage";}?>"><a href="delivery.php" title="Delivery">Delivery</a></li>
  <li class="<?php if ($section == "about") {echo "myCurrentPage";}?>"><a href="about.php" title="About us">About us</a></li>
</ul>

<br>