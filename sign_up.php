<?php

session_start();
$_SESSION[ "user_info_file" ] = "login_info.txt";
$_SESSION[ "logged_in" ] = false;
$_SESSION[ "signup_error_message" ] = null;

if ( $_SERVER[ "REQUEST_METHOD" ] === "POST" ) {
    $username = $_POST[ "user_name" ];
    $password = $_POST[ "password" ];
    $email = $_POST[ "email" ];

    $file = file( $_SESSION[ "user_info_file" ] );

    $line = 0;
    $linenum =  sizeof( $file );
    while ( $linenum > 0 ) {
        if ( strpos( $file[ $line ], $password ) !== true && strpos( $file[ $line ], $email ) !== true && strpos( $file[ $line ], $username ) !== true ) {
            $_SESSION[ "signup_error_message" ] = "Account already exists";
            break;
        } else {
            header( "Location: hotel.php" );
            $file = fopen( $_SESSION[ "user_info_file" ], mode:"a" );
            fwrite( $file, data: "username:" . $username . " " );
            fwrite( $file, data: "email:" . $email . " " );
            fwrite( $file, data: "password:" . $password . "\n" );
            fclose( $file );
            break;
        }
        $line++;
        $linenum--;
    }

}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="index.css" />
</head>

<body class="bg-dark text-white">
    <h1 class="text-center mt-5">Sign up</h1>

    <?php

if ( isset( $_SESSION[ "signup_error_message" ] ) ) {
    echo "<div class='alert alert-warning mx-auto col-11 col-md-10 col-lg-8'>". $_SESSION[ "signup_error_message" ] ."</div>";
    unset( $_SESSION[ "signup_error_message" ] );
}

unset( $_SESSION[ "signup_error_message" ] );
?>

    <form method="POST" action="sign_up.php" class="col-md-10 col-lg-8 mx-auto">
        <input type="email" placeholder="E-mail" class="form-control col-12 m-1" name="email" />

        <input type="password" placeholder="Password" class="form-control col-12 m-1" name="password" />

        <input type="text" placeholder="Username" class="form-control col-12 m-1" name="user_name" />

        <input type="submit" value="Submit" class="btn bg-black text-white form-control m-1" />
    </form>

    <div class="text-center">
        Have an account already? <a href="./login.php">Login.</a>
    </div>
</body>

</html>