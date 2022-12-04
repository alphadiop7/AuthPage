<?php
    session_start();

    require '../database/config.php';

    if (isset($_POST['submit'])) {

        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $options = ['cost'=> 12];
        $password_hash = password_hash($password, PASSWORD_BCRYPT, $options);

        if (empty ($_POST['username'])) {
            $alertusername = 'Veuillez remplir ce champ';
        } elseif (empty ($_POST['email'])) {
            $alertemail = 'Veuillez remplir ce champ';
        } elseif (empty ($_POST['password'])) {
            $alertpassword = 'Veuillez remplir ce champ';
        } else {
            if (!preg_match("/^[a-z]+\.[a-z-1-9]+@uvs.edu.sn/i",$email)) {
                $alertemailformat = "Format e-mail invalidé";
            } else {
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                
                if (!$result->num_rows > 0) {
                    $sql = "INSERT INTO users (name, email, password, created_at) VALUES ('$username', '$email', '$password_hash', CURRENT_TIMESTAMP)";
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
    }
?>