<?php
    session_start();
    $data = array();

    if (isset($_POST))
    {
        if (isset($_SESSION['cart']))
        {
            unset($_SESSION['cart'][$_POST['index']]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);

            array_push(
                $data,
                array_combine(
                    ['items', 'message', 'success'],
                    [
                        count($_SESSION['cart']),
                        'Item Removed.',
                        true
                    ]
                )
            );

            echo json_encode($data);
            exit;
        }
    }
?>