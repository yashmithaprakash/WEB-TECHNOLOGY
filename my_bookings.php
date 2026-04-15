<?php
session_start();
include "config.php";

$user = $_SESSION['user'];

$sql = "SELECT * FROM bookings 
JOIN events ON bookings.event_id = events.id
WHERE user_email='$user'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<div class="nav">
<a href="dashboard.php">Home</a>
<a href="events.php">Events</a>
<a href="my_bookings.php">My Bookings</a>
<a href="admin.php">Admin</a>
<a href="logout.php">Logout</a>
</div>
<h2>My Bookings</h2>

<table>
<tr>
<th>Event</th>
<th>Date</th>
<th>Location</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['event_name']; ?></td>
<td><?php echo $row['event_date']; ?></td>
<td><?php echo $row['location']; ?></td>
</tr>
<?php } ?>

</table>
<div class="nav">
<a href="dashboard.php">⬅ Back</a>
</div>
</div>

</body>
</html>