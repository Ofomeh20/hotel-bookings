<?php

    session_start();
    $_SESSION['user_info_file'] = "login_info.txt";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST["user_name"];
        $password = $_POST["password"];
        $email = $_POST["email"];



        $file = fopen($_SESSION['user_info_file'], mode:'r');
        $user_info = fread($file, filesize($_SESSION['user_info_file']));
        $password_position = strpos($user_info, $password);
        $email_position = strpos($user_info, $email);
        fclose($file);


        if ($email_position === false && $password_position === false) {
            $file = fopen($_SESSION['user_info_file'], mode:'a');
            fwrite($file, data: "username:" . $username . "\n");
            fwrite($file, data: "email:" . $email . "\n");
            fwrite($file, data: "password:" . $password . "\n \n");
            fclose($file);
            header('Location: ./hotel.html');
        } else {
            header('Location: ./hotel.html');
        }
}

?>