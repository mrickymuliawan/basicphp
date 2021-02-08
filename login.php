<?php
$myUsername = 'ricky';
$myPassword = 12345;

if ($_POST['username'] == '') {
  header('Location: form.php?error=maaf username kosong');
} else if ($myUsername == $_POST['username'] && $myPassword == $_POST['password']) {
  echo 'login success';
} else {
  header('Location: form.php?error=maaf salah nih');
}
