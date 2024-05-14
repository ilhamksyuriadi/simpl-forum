<?php
session_start();
include "../config/db.php";

$title = $_POST['title'];
$body = $_POST['body'];
$username = $_SESSION['username'];

$query = "INSERT INTO `posts` (`id`, `title`, `body`, `username`) VALUES (null, '$title', '$body', '$username')";
mysqli_query($connect, $query);
$checkSuccessInsert = mysqli_affected_rows($connect);
if ($checkSuccessInsert === 1) {
  header("Location: /home.php");
  exit(); 
}
else {
  header("Location: /createPost.php?error=Error When Create Post");
  exit();
}