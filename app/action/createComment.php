<?php
session_start();
include "../config/db.php";

$comment = $_POST['comment'];
$postId = $_POST['postId'];
$username = $_SESSION['username'];

$query = "INSERT INTO `comments` (`id`, `postId`, `username`, `comment`) VALUES (null, '$postId', '$username', '$comment')";
mysqli_query($connect, $query);
$checkSuccessInsert = mysqli_affected_rows($connect);
if ($checkSuccessInsert === 1) {
  header("Location: /post.php?id=$postId");
  exit(); 
}
else {
  header("Location: /post.php?id='$postId'&error=Error When Create Post");
  exit();
}