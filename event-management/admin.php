<?php
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
<h2>Admin Panel</h2>

<form method="POST" action="add_event.php">
<input type="text" name="name" placeholder="Event Name" required>
<input type="date" name="date" required>
<input type="text" name="location" placeholder="Location" required>
<button name="add">Add Event</button>
</form>

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
<td><a href="delete_event.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>

</table>
<div class="nav">
<a href="dashboard.php">⬅ Back</a>
</div>
</div>

</body>
</html>
