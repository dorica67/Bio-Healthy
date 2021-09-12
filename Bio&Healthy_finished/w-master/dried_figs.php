<!DOCTYPE html>
<html lange = "en">

<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <title>All Products - Bio&Healthy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">

    
</head>

<body>
    
        <div class="container">

            <div class = "navbar">
                <div class="logo">
                    <a href = "index.php"> <img src = "images/logo4.jfif" width="155px"></a>
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
        
        <!---single product details-->

        <div class="small-container single-product">
            <div class="row">
                <div class="col-2 img">
                    <img src="images/smokve_nutrigold.jpg" width="100%">
                </div>
                <div class = "col-2">
                    <p>Home/Jam</p>
                    <h1>Dried figs</h1>
                    
                    <p> Organic dried Lerida figs are an excellent source of dietary fibre that offer you the best of dried fruits. Apart from sweet taste, they are characterised by lovely creamy texture. Figs can often develop a white powdery coating. This is a natural process which is simply caused by the crystallisation of the fruit sugars in the fruit. Perfect energy booster and powerful antioxidants. </p>

                </div>
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

   

</body> 
  
</html>