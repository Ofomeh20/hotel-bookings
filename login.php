<?php

session_start();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["user_name"];
    $password = $_POST["password"];
    $email = $_POST["email"];



    $file = fopen($_SESSION['user_info_file'], mode:'r');
    $user_info = fread($file, filesize($_SESSION['user_info_file']));
    $password_position = strpos($user_info, $password);
    $email_position = strpos($user_info, $email);
    fclose($file);


    if ($email_position !== false && $password_position !== false) {
        header('Location: ./hotel.html');
    } else {
        header('Location: ./login.html');
    }
}

?>