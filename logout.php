<div class="nav">
<a href="dashboard.php">Home</a>
<a href="events.php">Events</a>
<a href="my_bookings.php">My Bookings</a>
<a href="admin.php">Admin</a>
<a href="logout.php">Logout</a>
</div>
<?php
session_start();
session_destroy();
header("Location: index.php");
?>