<?php
include "config.php";

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users (name,email,password)
    VALUES ('$name','$email','$password')");

    echo "Registered Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<form method="POST">
<h2>Register</h2>

<input type="text" name="name" placeholder="Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>

<button name="register">Register</button>

<p><a href="index.php">Login</a></p>
</form>
</div>

</body>
</html>
