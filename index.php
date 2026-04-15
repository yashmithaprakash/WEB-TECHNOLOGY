<?php
session_start();
include "config.php";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
    } else {
        echo "Invalid Login!";
    }
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
<h2>Login</h2>

<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

<p>No account? <a href="register.php">Register</a></p>
</form>
</div>

</body>
</html>