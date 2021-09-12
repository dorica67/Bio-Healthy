<?php
    session_start();

    if (isset($_SESSION['cart']))
    {
        $items = $_SESSION['cart'];
    }
    else
    {
        $items = array();
    }
?>

<!DOCTYPE html>
<html lange = "en">

<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    
    <title>All Products - Bio&Healthy</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">

    
</head>

<body>
    
        <div class="container">

            <div class = "navbar">
                <div class="logo">
                    <a href="index.php"><img src = "images/logo4.jfif" width="155px"></a>
                </div>      
            
        
            <nav>
                <ul id="MenuItems">
                    <li><a href = "index.php">Home</a></li>
                    <li><a href = "products.php">Products</a></li>
                    <li><a href = "account.php">Account</a></li>
                    
                        
                </ul>
            </nav>

            <div class="cart">
                <div class="cart-count">
                </div>
                <a href="cart.php">
                    <img src="images/cart.png" width="30px" height="30px">
                </a>
            </div>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">

            </div>

        </div>      
    

        <header>
        <div class="container">
            <h1>All products</h1>
            <!-- Search box -->
            <div class="search-box">
                <form action="" onsubmit="return false">
                    <input type="text" id="search" placeholder="Search Product">
                    <!-- <button id="btn-search">Search</button> -->
                </form>
            </div>
            <div class="filter-box">
                <a href="#" class="btn active" data-filter="all">All</a>
                <a href="#" class="btn" data-filter="flour">Flour</a>
                <a href="#" class="btn" data-filter="fruit">Fruit</a>
                <a href="#" class="btn" data-filter="jam">Jam</a>
                <a href="#" class="btn" data-filter="milk">Milk</a>
                <a href="#" class="btn" data-filter="oil">Oil</a>
                <a href="#" class="btn" data-filter="other">Other</a>
            </div>
        </div>
    </header>
    
    <main>
        <div class="slide-container">
        <section class="container" id="store-products">
        
        <div class="store-product jam">
        <div class="product-image">
            <img src="images/aronija_pekmez_nutrigold.jpg" alt="">
        </div>
            <div class="product-details">
                <h2>Chokeberry jam</h2>
                <p> $10.00</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="1"
                        data-product_image="images/aronija_pekmez_nutrigold.jpg"
                        data-product_name="Chokeberry jam"
                        data-product_brand="Nutrigold" 
                        data-product_category="Jam" 
                        data-product_price="10" 
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product milk">
            <img src="images/badem_mlijeko_alpro.jpg" alt="">
            <div class="product-details">
                <h2>Almond milk</h2>
                <p> $5.00</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="2"
                        data-product_image="images/badem_mlijeko_alpro.jpg"
                        data-product_name="Almond milk"
                        data-product_brand="Alpro" 
                        data-product_category="Milk" 
                        data-product_price="5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product milk">
            <img src="images/badem_mlijeko_bioprimo.jpg" alt="">
            <div class="product-details">
                <h2>Chokeberry jam</h2>
                <p> $4.00</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="3"
                        data-product_image="images/badem_mlijeko_bioprimo.jpg"
                        data-product_name="Almond milk"
                        data-product_brand="Bioprimo" 
                        data-product_category="Milk" 
                        data-product_price="4"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product flour">
            <img src="images/bademovo_nutrigold.png" alt="">
            <div class="product-details">
                <h2>Almond flour</h2>
                <p> $4.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="4"
                        data-product_image="images/bademovo_nutrigold.png"
                        data-product_name="Almond flour"
                        data-product_brand="Nutrigold" 
                        data-product_category="Flour" 
                        data-product_price="4.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>               

        <div class="store-product fruit">
            <img src="images/nutrigold_banana.png" alt="">
            <div class="product-details">
                <h2>Dried banana</h2>
                <p> $2.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="5"
                        data-product_image="images/nutrigold_banana.png"
                        data-product_name="Dried banana"
                        data-product_brand="Nutrigold" 
                        data-product_category="Fruit" 
                        data-product_price="2.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product other">
            <img src="images/cimet_nutrigold.jpg" alt="">
            <div class="product-details">
                <h2>Ceylon cinnamon</h2>
                <p> $4.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="6"
                        data-product_image="images/cimet_nutrigold.jpg"
                        data-product_name="Ceylon cinnamon"
                        data-product_brand="Nutrigold" 
                        data-product_category="Other" 
                        data-product_price="4.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>              
            </div>
        </div>

        <div class="store-product fruit">
            <img src="images/ind_oraščić_bio&bio.jpg" alt="">
            <div class="product-details">
                <h2>Indian nut</h2>
                <p> $5.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="7"
                        data-product_image="images/ind_oraščić_bio&bio.jpg"
                        data-product_name="Indian nut"
                        data-product_brand="Bio&Bio" 
                        data-product_category="Fruit" 
                        data-product_price="5.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product oil">
            <img src="images/kokos_ekozona.jpg" alt="">
            <div class="product-details">
                <h2>Coconut oil</h2>
                <p> $3.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="8"
                        data-product_image="images/kokos_ekozona.jpg"
                        data-product_name="Coconut oil"
                        data-product_brand="Ekozona" 
                        data-product_category="Oil" 
                        data-product_price="3.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product flour">
            <img src="images/kokosovo_nutrigold.jpg" alt="">
            <div class="product-details">
                <h2>Coconut flour</h2>
                <p> $5.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="9"
                        data-product_image="images/kokosovo_nutrigold.jpg"
                        data-product_name="Coconut flour"
                        data-product_brand="Nutrigold" 
                        data-product_category="Flour" 
                        data-product_price="5.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product fruit">
            <img src="images/mango_nutrigold.jpg" alt="">
            <div class="product-details">
                <h2>Dried mango</h2>
                <p> $2.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="10"
                        data-product_image="images/mango_nutrigold.jpg"
                        data-product_name="Dried mango"
                        data-product_brand="Nutrigold" 
                        data-product_category="Fruit" 
                        data-product_price="2.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product jam">
            <img src="images/maslac_lješnjak_nutrigold.png" alt="">
            <div class="product-details">
                <h2>Hazelnut butter</h2>
                <p> $12.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="11"
                        data-product_image="images/maslac_lješnjak_nutrigold.png"
                        data-product_name="Hazelnut butter"
                        data-product_brand="Nutrigold" 
                        data-product_category="Jam" 
                        data-product_price="12.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product oil">
            <img src="images/maslinovo ulje_ekozona.jpg" alt="">
            <div class="product-details">
                <h2>Olive oil</h2>
                <p> $15.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="12"
                        data-product_image="images/maslinovo ulje_ekozona.jpg"
                        data-product_name="Olive oil"
                        data-product_brand="Ekozona" 
                        data-product_category="Oil" 
                        data-product_price="15.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product jam">
            <img src="images/pekmez_ekozona.jpg" alt="">
            <div class="product-details">
                <h2>Plum jam</h2>
                <p> $3.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="13"
                        data-product_image="images/pekmez_ekozona.jpg"
                        data-product_name="Plum jam"
                        data-product_brand="Ekozona" 
                        data-product_category="Jam" 
                        data-product_price="3.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product flour">
            <img src="images/pirovo_ekozona.jpg" alt="">
            <div class="product-details">
                <h2>Pyrrhic flour</h2>
                <p> $2.90</p>
            </div>

            <button type="button" class="btn btn-cart"
                        data-product_id="14"
                        data-product_image="images/pirovo_ekozona.jpg"
                        data-product_name="Pyrrhic flour"
                        data-product_brand="Ekozona" 
                        data-product_category="Flour" 
                        data-product_price="2.9"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
        </div>

        <div class="store-product flour">
            <img src="images/pirovo_nutrigold.png" alt="">
            <div class="product-details">
                <h2>Pyrrhic flour</h2>
                <p> $3.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="15"
                        data-product_image="images/pirovo_nutrigold.png"
                        data-product_name="Pyrrhic flour"
                        data-product_brand="Nutrigold" 
                        data-product_category="Flour" 
                        data-product_price="3.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product other">
            <img src="images/riža_bio&bio.jpg" alt="">
            <div class="product-details">
                <h2>Integral rice</h2>
                <p> $3.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="16"
                        data-product_image="images/riža_bio&bio.jpg"
                        data-product_name="Integral rice"
                        data-product_brand="Bio&Bio" 
                        data-product_category="Other" 
                        data-product_price="3.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product other">
            <img src="images/smeđi_šećer_nutrigold.png" alt="">
            <div class="product-details">
                <h2>Brown sugar</h2>
                <p> $3.90</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="17"
                        data-product_image="images/smeđi_šećer_nutrigold.png"
                        data-product_name="Brown sugar"
                        data-product_brand="Nutrigold" 
                        data-product_category="Other" 
                        data-product_price="3.9"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product fruit">
            <img src="images/smokve_nutrigold.jpg" alt="">
            <div class="product-details">
                <h2>Dried figs</h2>
                <p> $2.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="18"
                        data-product_image="images/smokve_nutrigold.jpg"
                        data-product_name="Dried figs"
                        data-product_brand ="Nutrigold" 
                        data-product_category="Fruit" 
                        data-product_price="2.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product milk">
            <img src="images/soja_mlijeko_alpro.jpg" alt="">
            <div class="product-details">
                <h2>Soya milk</h2>
                <p> $3.50</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="19"
                        data-product_image="images/soja_mlijeko_alpro.jpg"
                        data-product_name="Soya milk"
                        data-product_brand="Alpro" 
                        data-product_category="Milk" 
                        data-product_price="3.5"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

        <div class="store-product milk">
            <img src="images/soja_mlijeko_bioprimo.png" alt="">
            <div class="product-details">
                <h2>Soya milk</h2>
                <p> $3.20</p>

                <button type="button" class="btn btn-cart"
                        data-product_id="20"
                        data-product_image="images/soja_mlijeko_bioprimo.png"
                        data-product_name="Soya milk"
                        data-product_brand="Bioprimo" 
                        data-product_category="Milk" 
                        data-product_price="3.2"
                        data-currency="$"> <span class="btn-text">Add to cart</span></button>
            </div>
        </div>

    </section>
</div>
</main>

        <script src ="script.js"></script>


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
        $(document).ready(function () {
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";
            
            <?php
                echo '$(".cart-count").text('. count($items) .');';
            ?>
            
            $(document).on('click', '.btn-cart', function () {
                $.ajax({
                    url: 'add_to_cart.php',
                    type: 'POST',
                    data: {
                        id: $(this).data('product_id'),
                        image: $(this).data('product_image'),
                        name: $(this).data('product_name'),
                        brand: $(this).data('product_brand'), 
                        category: $(this).data('product_category'), 
                        price: $(this).data('product_price'),
                        currency: $(this).data('currency'),
                    },
                    success: function (response) {
                        if (
                            $.parseJSON(response)[0].success
                        )
                        {
                            $('.cart-count').empty();
                            $('.cart-count').text($.parseJSON(response)[0].items);
                            swal('Great!', $.parseJSON(response)[0].message, 'success');
                        }
                        else
                        {
                            $('.cart-count').empty();
                            $('.cart-count').text($.parseJSON(response)[0].items);
                            swal('Oops!', $.parseJSON(response)[0].message, 'info');
                        }
                    }
                });
            });
        });
        

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