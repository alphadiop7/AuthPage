<?php
    require './database/config.php';

    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: welcome/");
    }

    if (isset($_POST['submit'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if (empty ($_POST['email'])) {
            $alertemail = 'Veuillez remplir ce champ';
        } elseif (empty ($_POST['password'])) {
            $alertpassword = 'Veuillez remplir ce champ';
        } else {
            if (!preg_match("/^[a-z]+\.[a-z-1-9]+@uvs.edu.sn/i",$email)) {
                $alertemailformat = "Format e-mail invalidé";
            } else {
                $sql = "SELECT * FROM  users WHERE email = '$email' ";
                $result = mysqli_query($conn, $sql);
                
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($password = password_verify($password, $row['password'])) {
                            $_SESSION['username'] = $row['name'];
                            header("Location: welcome/");
                        } else {
                            $errormsg = 'Woops! Email or Password is Wrong.';
                        }
                    }
                } else {
                    $errormsg = 'Woops! Email or Password is Wrong.';
                }
            }
        }
    }
?>