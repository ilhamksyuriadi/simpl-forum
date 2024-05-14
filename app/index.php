<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Simpl Forum - Login</title>
</head>

<body>
  <h1>Simpl Forum - Login</h1>
  <form method="post" action="action/login.php">
    <div>
      <label for="username">Username :</label>
      <input type="text" id="username" name="username" required><br>
    </div>
    <br />
    <div>
      <label for="password">Password :</label>
      <input type="password" id="password" name="password" required><br>
    </div>
    <br />
    <?php if (isset($_GET['error'])) { ?>
      <p> <?php echo $_GET['error']; ?> </p>
    <?php } ?>
    <input type="submit" value="Login">
  </form>
  <a href="register.php">Register</a>
</body>

</html>