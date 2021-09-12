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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

        <div class = "navbar">
            <div class="logo">
                <a href="index.html"><img src = "images/logo4.jfif" width="155px"></a>
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
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                    if (count($items))
                    {
                        foreach ($items as $key => $item) 
                        {
                            echo '
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <div class="product-image">
                                                <img src="'. $item['product_image'] .'" class="card-img" alt="' . $item['product_name'] . $item['product_brand'] . $item['product_category'] . '"> 
                                            </div>
    
                                        </div>
    
                                        <div class="col-md-5">
                                            <div class="card-body">
                                                <h5 class="card-title">' . $item['product_name'] . '</h5>
                                                <p class="card-brand">' . $item['product_brand'] . '</p>            
                                                <p class="card-brand">' . $item['product_category'] . '</p>         
                                                <p class="card-text"><span>' . $item['currency'] . '</span>' . $item['product_price'] . '</p>
                                                
                                                <div class="d-flex align-items-center">
                                                    <button class="btn btn-warning btn-sm btn-save-later me-2" 
                                                    data-product_id="'. $item['product_id'] .'"
                                                    data-product_name="'. $item['product_name'] .'"
                                                    data-product_brand="'. $item['product_brand'] .'"       
                                                    data-product_category="'. $item['product_category'] .'"  
                                                    data-product_price="'. $item['product_price'] .'"
                                                    data-product_image="'. $item['product_image'] .'"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 me-2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>Save For Later</button>
                                                    <button class="btn btn-danger btn-sm btn-remove" data-product_index="'. $key .'"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>Remove</button>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-md-3">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 cursor-pointer me-2 incrementItem"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                                    <input type="number" name="quantity[]" class="form-control quantity" data-product_price="'. $item['product_price'] .'" value="1">
                                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 cursor-pointer ms-2 decrementItem"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>'
                            ;
                        }
                    }
                    else
                    {
                        echo '
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Cart Is Empty!</div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">PRICE DETAILS</div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <p>Price (<span class="items-count"><?php echo count($items); ?></span>) Items</p>
                            </div>

                            <div class="col-md-6">
                                <div><span class="currency"></span><span class="price"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Delivery Charges</p>
                            </div>

                            <div class="col-md-6">
                                <div class="text-muted"><small>FREE</small></div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <p>Amount Payable</p>
                            </div>

                            <div class="col-md-6">
                                <div><span class="currency"></span><span class="price"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            <?php
                echo '$(".cart-count").text('. count($items) .');';
            ?>

            let totalPrice = 0;
            $('.quantity').map(function () {
                totalPrice = totalPrice + (Number($(this).val()) * Number($(this).data('product_price')));
            });

            $('.currency').text('$');
            $('.price').text(totalPrice);

            // Remove Item From Cart
            $(document).on('click', '.btn-remove', function () {
                var that = this;

                $.ajax({
                    url: 'remove_from_cart.php',
                    type: 'POST',
                    data: {
                        index: $(this).data('product_index')
                    },
                    success: function (response) {
                        if (
                            $.parseJSON(response)[0].success
                        )
                        {
                            $(that).parent().parent().parent().parent().parent().remove();

                            let totalPrice = 0;
                            $('.quantity').map(function () {
                                totalPrice = totalPrice + (Number($(this).val()) * Number($(this).data('product_price')));
                            });

                            $('.currency').text('$');
                            $('.price').text(totalPrice);

                            $('.cart-count').empty();
                            $('.cart-count').text($.parseJSON(response)[0].items);
                            $('.items-count').text($.parseJSON(response)[0].items);
                            swal('Great!', $.parseJSON(response)[0].message, 'success');
                        }
                    }
                });
            });

            // Save Item For Later
            $(document).on('click', '.btn-save-later', function () {
                var that = this;

                $.ajax({
                    url: 'save_for_later.php',
                    type: 'POST',
                    data: {
                        product_id: $(this).data('product_id'),
                        product_name: $(this).data('product_name'), 
                        product_price: $(this).data('product_price'),
                        product_image: $(this).data('product_image'),
                    },
                    success: function (response) {
                        if (
                            $.parseJSON(response)[0].success
                        )
                        {
                            swal('Great!', $.parseJSON(response)[0].message, 'success');
                        }
                        else
                        {
                            swal('Oops!', $.parseJSON(response)[0].message, 'info');
                        }
                    }
                });
            });

            // Increment Item Quantity
            $(document).on('click', '.incrementItem', function () {
                let value = $(this).siblings('.quantity').val();
                $(this).siblings('.quantity').val(
                    Number(value) + 1
                );

                let totalPrice = 0;
                $('.quantity').map(function () {
                    totalPrice = totalPrice + (Number($(this).val()) * Number($(this).data('product_price')));
                });

                $('.currency').text('$');
                $('.price').text(totalPrice);
            });
            // Decrement Item Quantity
            $(document).on('click', '.decrementItem', function () {
                let value = $(this).siblings('.quantity').val();
                if ((Number(value) - 1) >= 1 )
                {
                    $(this).siblings('.quantity').val(
                        Number(value) - 1
                    );
                }

                let totalPrice = 0;
                $('.quantity').map(function () {
                    totalPrice = totalPrice + (Number($(this).val()) * Number($(this).data('product_price')));
                });

                $('.currency').text('$');
                $('.price').text(totalPrice);
            });
        });
    </script>
</body>
</html>