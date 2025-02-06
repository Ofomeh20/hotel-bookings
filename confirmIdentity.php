<?php

session_start();
require 'PHPMailer-PHPMailer-1a06bd3/src/PHPMailer.php';
require 'PHPMailer-PHPMailer-1a06bd3/src/SMTP.php';
require 'PHPMailer-PHPMailer-1a06bd3/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$_SESSION[ 'user_info_file' ] = 'login_info.txt';
$_SESSION[ 'login_error_message' ] = null;


if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
}

if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    $password = $_POST[ 'password' ];
    $email = $_POST[ 'email' ];

    $file = file( $_SESSION[ 'user_info_file' ] );

    $line = 0;
    $linenum =  sizeof( $file );
    while ( $linenum > 0 ) {
        if ( strpos( $file[ $line ], $password ) !== false && strpos( $file[ $line ], $email ) !== false ) {
          $otp = rand(100000, 999999);
          
          $_SESSION['email'] = $email;
          $_SESSION['password'] = $password;
          $_SESSION['request'] = "log in";
          $_SESSION['line'] = $line;
          $_SESSION['otp'] = $otp;

          $mail = new PHPMailer(true);

  try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'athekamebash@gmail.com';  // Your email
      $mail->Password = 'zudqcyoqdgotmewz';  // Your email app password
      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;

      $mail->setFrom('athekamebash@gmail.com', 'Mee-rooms');
      $mail->addAddress($email);

      $mail->isHTML(true);
      $mail->Subject = 'Your OTP Code';
      $mail->Body = "Your OTP code is: <b>$otp</b>";

      $mail->send();
      header('Location: otp_verification.php'); // Redirect to OTP verification page
      exit();
  } catch (Exception $e) {
      // $errors[] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      $errors[] = "Message could not be sent.Try again";
      $_SESSION['registration_errors'] = $errors;
      var_dump($errors);  // Redirect back to the registration page
      exit();
  }

          
            /* $userInfo = explode(" ", $file[$line]);
            $userId = explode(":", $userInfo[0]);
            $_SESSION["user_id"] = $userId[1];
            header( 'Location: hotel.php' ); */
        } else {
            $_SESSION[ 'login_error_message' ] = 'Incorrect email or password';
            header("Location: login.php");
        }
        $line++;
        $linenum--;
    }

}

?>