<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<div class="nav">
<a href="events.php">View Events</a>
<a href="my_bookings.php">My Bookings</a>
<a href="admin.php">Admin Panel</a>
<a href="logout.php">Logout</a>
</div>

</div>

</body>
</html>