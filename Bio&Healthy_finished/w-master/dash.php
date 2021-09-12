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
  <title>Bio&Healthy</title>

<link rel="stylesheet" href="style.css">

</head>
  
<div class="main_body">
<?php    
echo "Welcome to Bio&Healthy " .$_SESSION ['email'];
?>
</div>

<div class="row">
            <div class="col-2">
                <h1>Start eating healthy</h1>
                <p>Start your day by eating bio&healthy <br> food.
                    Give your body healthy mix to <br> gain nutrients.</p>

                    <?php
    if($usertype == "Admin")
    {
    ?>
      <a href="products.php" class="btn"> Explore Now &#8594; </a>
    <?php  
    }
    if($usertype == "Client")
    {
      ?>
	  <li><a href="index.php" class="btn_logout">Home</a></li>
    <li><a href="products.php" class="btn_logout">Products</a></li>
    <?php
    }
    ?>
    <li><a href="logout.php" class="btn_logout">Logout</a></li>

                    
            </div>
    
            <div class="col-2">
                <img src="images/Start-eating-healthy.png">
            </div>
    
        </div>

    </div>

</html>