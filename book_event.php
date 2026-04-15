<?php
session_start();
include "config.php";

$user = $_SESSION['user'];
$id = $_GET['id'];

// CHECK if already booked
$check = mysqli_query($conn, "SELECT * FROM bookings WHERE user_email='$user' AND event_id='$id'");

if(mysqli_num_rows($check) == 0){
    mysqli_query($conn, "INSERT INTO bookings (user_email,event_id)
    VALUES ('$user','$id')");
    $msg = "Event Booked Successfully!";
} else {
    $msg = "You already booked this event!";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<p class="success"><?php echo $msg; ?></p>

<div class="nav">
<a href="events.php">Back to Events</a>
</div>

</div>

</body>
</html>