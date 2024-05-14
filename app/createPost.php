<?php
session_start();

if (isset($_SESSION['username'])) {
?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Simpl Forum - Create Post</title>
  </head>

  <body>
    <?php include "./template/navBar.php" ?>
    <section>
      <h1>Create Post</h1>
      <form method="post" action="action/createPost.php">
        <div>
          <input type="text" id="title" name="title"><br>
        </div>
        <br />
        <div>
          <textarea id="body" name="body"></textarea>
        </div>
        <br />
        <input type="submit" value="Post" />
      </form>
    </section>
  </body>

  </html>

<?php
}
