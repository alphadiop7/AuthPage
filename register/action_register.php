<?php
    require('../config.php');

    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: ../http://localhost/login_form_uvs/");
    }

    if (isset($_POST['submit'])) {

        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars(md5($_POST['password']));

        if (!preg_match("/^[a-z]+\.[a-z-1-9]+@uvs.edu.sn/i",$email)) {
            $errormsg = "Invalid email format";
        } else {
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO users (name, email, password, created_at) VALUES ('$username', '$email', '$password', CURRENT_TIMESTAMP)";
			    $result = mysqli_query($conn, $sql);
                if ($result) {
                    $successmsg = 'Wow! User Registration Completed.';
				    $username = "";
				    $email = "";
				    $_POST['password'] = "";
                } else {
                    $errormsg ='Woops! Something Wrong Went.';
                }
            } else {
                $errormsg = 'Woops! Email Already Exists.';
            }
        }
    }
?>