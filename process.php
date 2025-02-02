<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    // Process other form fields

    // Example confirmation message
    $response = "Thank you, $name! Your booking has been confirmed.";
    echo $response;
}
?>
