<?php
session_start();
include "./config/db.php";

$query = "SELECT * FROM posts";
$response = mysqli_query($connect, $query);

if (isset($_SESSION['username'])) {
?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Simpl Forum - Home</title>
  </head>

  <body>
    <?php include "./template/navBar.php" ?>
    <section>
      <h1>Posts</h1>
      <?php while ($row = mysqli_fetch_assoc($response)) { ?>
        <h2> <?php echo $row['title']; ?> </h2>
        <b>author: <?php echo $row['username']; ?> </b>
        <p> <?php echo $row['body']; ?> </p>
        <a href=<?php echo 'post.php?id=' . $row['id']; ?>>View post</a>
      <?php } ?>
    </section>
  </body>

  </html>

<?php
}
