<?php
    include "db.php";
    $data = array();

    if (isset($_POST)) {
        // receive all input values from the form
        $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
        $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
        $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
        $product_image = mysqli_real_escape_string($conn, $_POST['product_image']);

        // Check the database to make sure user product not already exist
        $product_exists = "SELECT * FROM saved_products WHERE product_id='$product_id' LIMIT 1";
        $result = mysqli_query($conn, $product_exists);
        $product = mysqli_num_rows($result);

        // If product exists
        if ($product) {
            array_push(
                $data,
                array_combine(
                    ['message', 'success'],
                    [
                        'Item Already Saved.',
                        false
                    ]
                )
            );

            echo json_encode($data);
            exit;
        }
        else 
        {
            $query = "INSERT INTO saved_products (
                product_id, 
                product_name,
                product_price, 
                product_image
            ) VALUES(
                '$product_id', 
                '$product_name',
                '$product_price',
                '$product_image'
            )";

            mysqli_query($conn, $query);

            array_push(
                $data,
                array_combine(
                    ['message', 'success'],
                    [
                        'Item Saved.',
                        true
                    ]
                )
            );

            echo json_encode($data);
            exit;
        }
    }
?>