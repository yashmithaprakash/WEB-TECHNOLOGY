<?php
include "config.php";
$id=$_GET['id'];

mysqli_query($conn,"DELETE FROM events WHERE id=$id");

header("Location: admin.php");
?>
