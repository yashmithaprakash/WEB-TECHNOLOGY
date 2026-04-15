<?php
session_start();
include "config.php";

$result = mysqli_query($conn, "SELECT * FROM events");
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

<h2>Available Events</h2>

<table>
<tr>
<th>Name</th>
<th>Date</th>
<th>Location</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['event_name']; ?></td>
<td><?php echo $row['event_date']; ?></td>
<td><?php echo $row['location']; ?></td>
<td>
<a href="book_event.php?id=<?php echo $row['id']; ?>">
<button>Book Now</button>
</a>
</td></tr>
<?php } ?>

</table>
<div class="nav">
<a href="dashboard.php">⬅ Back</a>
</div>
</div>

</body>
</html>
