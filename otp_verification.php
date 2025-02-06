<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $otp = $_POST['otp'];
  
  if ($otp == $_SESSION['otp']) {
      if ($_SESSION['request'] === "registration") {
        $filew = fopen( $_SESSION[ "user_info_file" ], "a" );
        fwrite( $filew, data: "\nusername:" . $_SESSION['username'] . " " );
        fwrite( $filew, data: "email:" . $_SESSION['email'] . " " );
        fwrite( $filew, data: "password:" . $_SESSION['password'] . "" );
        fclose( $filew );
        
        
        $_SESSION["user_id"] = $_SESSION['username'];
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['otp']);
        unset($_SESSION['request']);
        header( "Location: hotel.php" );
        exit();
        
      }elseif ($_SESSION['request'] === "log in") {
        $file = file( $_SESSION[ "user_info_file" ] );
        $line = $_SESSION['line'];
        
        $userInfo = explode(" ", $file[$line]);
            $userId = explode(":", $userInfo[0]);
            $_SESSION["user_id"] = $userId[1];
            header( 'Location: hotel.php' );
      }

     
  }else {
    $errorMessage = "Wrong OTP";
  }
}

?>


<!DOCTYPE html>
<html>

<head>
  <link rel='stylesheet' href='bootstrap.css' />
  <link rel='stylesheet' href='bootstrap.min.css' />
  <link rel='stylesheet' href='index.css' />
</head>

<body class='bg-dark text-white'>
  <h1 class='text-center mt-5'>Verify OTP code sent to you</h1>

  <?php
      if (isset($errorMessage)){
        echo "<div class='alert alert-warning mx-auto col-11 col-md-10 col-lg-8'> $errorMessage </div>";
        unset($errorMessage);
      }
  ?>

  <form method='POST' class='col-md-10 col-lg-8 mx-auto'>
    <input type="text" name="otp" class="form-control col-6">
    <input type='submit' value='Submit' class='btn bg-black form-control m-1 text-white' />
  </form>
</body>

</html>