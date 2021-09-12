<?php
    session_start();
    $added = false;
    $data = array();

    if (isset($_POST))
    {
        if (!isset($_SESSION['cart']))
        {
            $_SESSION['cart'] = array();
        }

        foreach ($_SESSION['cart'] as $key => $item) {
            if ($_POST['id'] == $item['product_id'])
            {
                $added = true;
            }
        }

        if (!$added)
        {
            array_push(
                $_SESSION['cart'],
                array_combine(
                    [
                        'product_id',
                        'product_image',
                        'product_name',
                        'product_brand', //new
                        'product_category', //new
                        'product_price',
                        'currency'
                    ],
                    [
                        $_POST['id'],
                        $_POST['image'],
                        $_POST['name'],
                        $_POST['brand'], //new
                        $_POST['category'], //new
                        $_POST['price'],
                        $_POST['currency'],
                    ]
                )
            );

            array_push(
                $data,
                array_combine(
                    ['items', 'message', 'success'],
                    [
                        count($_SESSION['cart']),
                        'Item Added To Cart',
                        true
                    ]
                )
            );
        }
        else
        {
            array_push(
                $data,
                array_combine(
                    ['items', 'message', 'success'],
                    [
                        count($_SESSION['cart']),
                        'Item Already Added.',
                        false
                    ]
                )
            );
        }


        echo json_encode($data);
        exit;
    }
?>