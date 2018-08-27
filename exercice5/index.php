<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exercice5</title>
</head>
<p>
  <?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : 'Aucun login'; ?> <br />
  <?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : 'aucun mot de passe'; ?>
</p>
<form enctype="multipart/form-data" action="index.php" method="POST">
  <input type="text" name="newPass"> nouveau identifiant </input>
  <input type="text" name="newLog"> nouveau mot de passe </input>
  <input type="submit" value="Envoyer" />
</form>
<?php
if (!empty($_POST['newLog']) && !empty($_POST['newPass'])) {
  setcookie('login', $_POST['newLog'], time() + 20, '/', null, false);
  setcookie('password', $_POST['newPass'], time() + 20, '/', null, false);
  echo $_COOKIE['password']. $_COOKIE['login'];
}
?>
<form method="post" action="../exercice3">
  <button type="submit">Back to exercice 3</button>
</form>
</body>
</html>
