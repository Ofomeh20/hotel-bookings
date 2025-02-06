<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
  <link rel='stylesheet' href='bootstrap.css' />
  <link rel='stylesheet' href='bootstrap.min.css' />
  <link rel='stylesheet' href='index.css' />
</head>

<body class='bg-dark text-white'>
  <h1 class='text-center mt-5'>Login</h1>

  <?php

        if ( isset( $_SESSION[ 'login_error_message' ] ) ) {
            echo '<div class="alert alert-warning mx-auto col-11 col-md-10 col-lg-8">'. $_SESSION[ 'login_error_message' ] .'</div>';
            unset( $_SESSION[ 'login_error_message' ] );
        }

        unset( $_SESSION[ 'login_error_message' ] );
    ?>

  <form method='POST' action='confirmIdentity.php' class='col-md-10 col-lg-8 mx-auto'>
    <input type='email' placeholder='E-mail' class='form-control col-12 m-1' name='email' required />

    <input type='password' placeholder='Password' class='form-control col-12 m-1' name='password' required />

    <input type='submit' value='Submit' class='btn bg-black form-control m-1 text-white' />
  </form>

  <div class='text-center'>
    Have an account already? <a href='./sign_up.php'>Sign up.</a>
  </div>
</body>

</html>