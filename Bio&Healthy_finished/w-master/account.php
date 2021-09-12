<?php
    session_start();
    if (isset($_SESSION['user_id'])){
        header("Location: dash.php");
        return;
    }

    include "db.php";
    $error = "";

    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        $user = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password'");
        $user = mysqli_fetch_assoc($user);
        if(isset($user['id']))
        {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_type'] = $user['type'];
            header("Location: dash.php");
            return;
        }
        else
        {
            $error = "Email or Password Incorrect";
        }
    }

    if (
        isset( $_SESSION['message'] )
    )
    {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
    }
    
?>
<!DOCTYPE html>
<html lange = "en">

<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <title>Bio&Healthy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">

    
</head>

<body>
    
    <div class = "header">

        <div class="container">

            <div class = "navbar">
                <div class = "logo">
                  <a href = "index.php"> <img src = "images/logo4.jfif" width="155px"> </a> 
                </div>
                
            
        
            <nav>
                <ul id="MenuItems">
                    <li><a href = "index.php">Home</a></li>
                    <li><a href = "products.php">Products</a></li>
                    <li><a href = "account.php">Account</a></li>
                    
                        
                </ul>
            </nav>

            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">

        </div>

        </div> 

        <div class = "account-page">
            <div class = "container">
                <div class="row">
                    <div class = "col-2">
                        <img src = "images/Start-eating-healthy.png" width="100%">
                    </div>

                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="Indicator">
                            </div>

                            <div align="center" style="line-height:4; ">
        <?php
          if($error != "")
          {
          ?>
              <div style="background: red; color:white; width:40%">
                <strong>Error!</strong> <?php echo $error ?>.
              </div>
        <?php } ?>
                            

                        <form id="LogForm" action="" method="POST">
                            <input type="email" name="email" placeholder="Username">
                            <input type="password" name="password" placeholder="Password">
                            <button type ="submit" class="btn" name="login">Login</button>
                        </form>

                        <form id="RegForm" method="POST" action="register_action.php">
                            <!-- <input type="text" name="username" placeholder="Username"> -->
                            <input type="email" name="email" placeholder="Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <select name="type" required>
                                <option value="">Select Type</option>
                                <option value="Admin">Admin</option>
                                <option value="Client">Client</option>
                            </select>
                            <button type ="submit" name="register" class="btn">Register</button>
                        </form>

                        <?php
                                if (isset($message)) 
                                {
                                    echo '<div>'. $message .'</div>';
                                }
                        ?>

                    </div>

                    </div>

                </div>
            </div>

        </div>
    

    </div>


    <!--footer-->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col1">
                    <img src = "images/logo4.jfif" width="155px">
                    <p>We want to make Your shopping easier and make as many healthy products available as possible </p>
                </div>

                <div class="footer-col-2">
                    <h4>Useful links</h4>
                    <ul>
                        <li>Blog</li>
                        <li>Return Policy</li>
                    </ul>
                </div>
            </div>

            <hr>
            <p class = "copyright">Copyright 2021 - Bio&Healthy</p>

        </div>
    </div>

    <!--js for toggle menu-->

    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px"
            }

            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!--js for toggle form-->

    <script>

        var LogForm = document.getElementById("LogForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");


        function register(){
            RegForm.style.transform = "translateX(0px)";
            LogForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login(){
            RegForm.style.transform = "translateX(300px)";
            LogForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }

    </script>



   

</body> 
  
</html>