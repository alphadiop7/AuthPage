<?php
    require 'config.php';

    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: welcome/");
    }

    if (isset($_POST['submit'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars(md5($_POST['password']));

        $sql = "SELECT * FROM  users WHERE email = '$email' AND password = '$password' ";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['name'];
            header("Location: welcome/");
        } else {
            $errormsg = 'Woops! Email or Password is Wrong.';
        }
    }
?>