<?php

session_start();
$_SESSION["booking_message"] = null;
$roomLog = "rooms.txt";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $roomType = $_POST["roomType"];
  if (!isset($_SESSION["user_id"])) {
    $_SESSION["booking_message"] = "Login first";
  } else {
    $file = file($roomLog);
    $fileReversed = array_reverse($file);
    
    $hasBeenBooked = $roomType . " has been booked";
    $hasBeenUnBooked = $roomType . " has been unbooked";
    
    $bookedFind = array_search($hasBeenBooked, $fileReversed);
    $unbookedFind = array_search($hasBeenUnBooked, $fileReversed);
    
    if ($bookedFind !== false || $unbookedFind !== false) {
      
      if ($unbookedFind === false){
        $unbookedPosition = -1;
      } else {
        $unbookedPosition = count($file) - 1 - $unbookedFind;
      }
      
      if ($bookedFind === false){
        $bookedPosition = -1;
      } else {
        $bookedPosition = count($file) - 1 - $bookedFind;
      }


      
      
      if ($unbookedPosition > $bookedPosition) {
        $filew = fopen( $roomLog, "a" );
        fwrite( $filew,  "\n" . $hasBeenBooked);
        fclose( $filew );
        $_SESSION[$roomType] = "booked";
      } elseif ($unbookedPosition < $bookedPosition) {
        $_SESSION["booking_message"] = "Room has already been booked!";
      }
    } else  {
      $filew = fopen( $roomLog, "a" );
      fwrite( $filew, "\n" . $hasBeenBooked );
      fclose( $filew );
      $_SESSION[$roomType] = "booked";
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Booking Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container mt-5">
    <h1>Hotel Booking Form</h1>
    <?php

if ( isset( $_SESSION[ 'booking_message' ] ) ) {
    echo '<div class="alert alert-warning mx-auto col-11 col-md-10 col-lg-8">'. $_SESSION[ 'booking_message' ] .'</div>';
    unset( $_SESSION[ 'booking_message' ] );
}
?>

    <form id="bookingForm" method="POST">
      <div class="form-group">
        <label for="checkin">Check-in Date:</label>
        <input type="date" id="checkin" name="checkin" class="form-control" required />
      </div>
      <div class="form-group">
        <label for="checkout">Check-out Date:</label>
        <input type="date" id="checkout" name="checkout" class="form-control" required />
      </div>
      <div class="form-group">
        <label for="roomType">Room Type:</label>
        <select id="roomType" name="roomType" class="form-control" required>
          <option value="Room 1">Room 1:Single Room</option>
          <option value="Room 2">Room 2:Double Room</option>
          <option value="Room 3">Room 3:Suite</option>
          <option value="Room 4">Room 4:Suite</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>

</html>