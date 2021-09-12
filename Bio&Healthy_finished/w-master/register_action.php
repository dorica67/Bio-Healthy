<?php
    session_start();
    include "db.php";

    if (isset($_POST['register'])) {
        // receive all input values from the form
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $type = mysqli_real_escape_string($conn, $_POST['type']);

        // Check the database to make sure user does not already exist with the same email
        $user_exists = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_exists);
        $user = mysqli_fetch_assoc($result);

        // If user exists
        if ($user) {
            if ($user['email'] === $email) {
                $_SESSION['message'] = 'Username already exists';
                header('location: account.php');
            }
        }
        else {
            $_SESSION['message'] = 'User Registered Successfully';
            //Encrypt the password before saving in the database
            $password = md5($password);

            $query = "INSERT INTO users (email, password, type) VALUES('$email', '$password', '$type')";
            mysqli_query($conn, $query);
            header('location: account.php');
        }
    }
?>