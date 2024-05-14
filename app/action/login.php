<?php
session_start();
include "../config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);
$foundedAccount = mysqli_num_rows($result);

if ($foundedAccount === 1) {
  $_SESSION['username'] = $username;
  header("Location: /home.php");
  exit(); 
}
else {
  header("Location: /index.php?error=Incorrect Username or Password");
  exit();
}