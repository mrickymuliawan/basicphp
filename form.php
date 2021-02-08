<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="POST" action="login.php">
    <p>username</p>
    <input name="username">
    <p>password</p>
    <input name="password" type="password">
    <button type="submit">login</button>
    <?php
    if (isset($_GET['error'])) {
      echo "<b> $_GET[error] </b>";
    }
    ?>
  </form>
</body>

</html>

<?php
if (isset($_POST['overtime'])) {
  echo $_POST['overtime'];
}
?>