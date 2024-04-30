<?php
session_start();

if (isset($_SESSION['email'])) {

    $email = $_SESSION['email'];
    header('Location: painel.php');
} else {

    if (isset($_POST['email']) && isset($_POST['pass'])) {

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(!empty($email) && !empty($pass))
        {
            $_SESSION['email'] = $email;
            header("Location: painel.php");

        } else {

            header("Location: index.php");
            
        }
    }
}

?>