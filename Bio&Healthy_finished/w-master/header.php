<?php
session_start();
// Check if user is logged in using the session variable
if (!isset($_SESSION['user_id'])){
   header("location: account.php"); 
} 

$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];
$usertype = $_SESSION['user_type'];

include_once("db.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Com</title>
 

  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="outer" style="display: flex">
<nav class="sidenav">
<ul>
    <li><a href="dash.php">Home</a></li>
    <?php
    if($usertype == "Admin")
    {
    ?>
      <li><a href="products.php">Products</a></li>
      <li><a href="index.php">Orders</a></li>
    <?php  
    }
    if($usertype == "Client")
    {
      ?>
      <li><a href="myresult.php">Grade Book</a></li>
    <?php
    }
    ?>
    <li><a href="logout.php">Logout</a></li>
</ul>
</nav>