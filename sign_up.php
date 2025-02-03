<?php

session_start();
$_SESSION[ "signup_error_message" ] = null;
$_SESSION[ "user_info_file" ] = "login_info.txt";
if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
}

if ( $_SERVER[ "REQUEST_METHOD" ] === "POST" ) {
    $username = $_POST[ "user_name" ];
    $password = $_POST[ "password" ];
    $email = $_POST[ "email" ];

    $file = file( $_SESSION[ "user_info_file" ] );
    $accountExists = false;

    $line = 0;
    $linenum =  sizeof( $file );
    while ($line < $linenum) {
        if (strpos( $file[ $line ], $email ) !== false && strpos( $file[ $line ], $username ) !== false ) {
            $_SESSION[ "signup_error_message" ] = "Account already exists";
            $accountExists = true;
            break;
        }
        $line++;
    }
        if (!$accountExists) {
            $filew = fopen( $_SESSION[ "user_info_file" ], "a" );
            fwrite( $filew, data: "username:" . $username . " " );
            fwrite( $filew, data: "email:" . $email . " " );
            fwrite( $filew, data: "password:" . $password . "\n" );
            fclose( $filew );
            $file = file( $_SESSION[ "user_info_file" ] );
            
            $userInfo = explode(" ", $file[$line]);
            $userId = explode(":", $userInfo[0]);
            $_SESSION["user_id"] = $userId[1];
            header( "Location: hotel.php" );
            exit();
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