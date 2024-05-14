<?php
session_start();
include "./config/db.php";

$postId = $_GET['id'];
$query = "SELECT title, body, username FROM posts WHERE id=$postId";
$result = mysqli_query($connect, $query);

if (!$result) {
  echo 'Post not found';
}

$post = mysqli_fetch_row($result);
$title = $post[0];
$body = $post[1];
$postUsername = $post[2];

$queryComment = "SELECT comment, username FROM comments WHERE postId=$postId";
$resultComment = mysqli_query($connect, $queryComment);

if (isset($_SESSION['username'])) {
?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Simpl Forum - Post</title>
  </head>

  <body>
    <?php include "./template/navBar.php" ?>
    <section>
      <h1>Posts</h1>
      <h2>Title: <?php echo $title ?></h2>
      <b>Author: <?php echo $postUsername ?></b>
      <p><?php echo $body ?></p>
    </section>
    <section>
      <h1>Comments</h1>
      <form method="post" action="action/createComment.php">
        <input style="display: none;" id="comment" name="postId" type="postId" value="<?php echo $postId; ?>" />
        <textarea id="comment" name="comment"></textarea>
        <br />
        <input type="submit" value="Add Comment" />
      </form>
    </section>
    <section>
      <?php while ($row = mysqli_fetch_assoc($resultComment)) { ?>
        <p> <b><?php echo $row['username']; ?></b>: <?php echo $row['comment']; ?> </p>
      <?php } ?>
    </section>
  </body>

  </html>

<?php
}
