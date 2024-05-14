<?php
session_start();
include "../config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$password')";
mysqli_query($connect, $query);
$checkSuccessInsert = mysqli_affected_rows($connect);
if ($checkSuccessInsert === 1) {
  header("Location: /index.php");
  exit(); 
}
else {
  header("Location: /register.php?error=Create Account Error");
  exit();
}