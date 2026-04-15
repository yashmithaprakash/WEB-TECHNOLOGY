<?php
include "config.php";

$name=$_POST['name'];
$date=$_POST['date'];
$location=$_POST['location'];

mysqli_query($conn,"INSERT INTO events (event_name,event_date,location)
VALUES ('$name','$date','$location')");

header("Location: admin.php");
?>