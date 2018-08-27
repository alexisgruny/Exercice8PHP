<?php
if (!empty($_GET['log']) && !empty($_GET['pass'])) {
  ' ';
} else {
  echo 'veuillez marquer votre mot de passe et votre identifiant';
};
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>exercice 3</title>
</head>
<body>
  <form enctype="multipart/form-data" action="index.php" method="get">
    <input type="text" name="pass"> Identifiant </input>
    <input type="text" name="log"> mot de passe </input>
    <input type="submit" value="Envoyer" />
  </form>
  <form method="GET" action="../exercice4">
    <button type="submit">exercice 4</button>
  </form>
  <form method="GET" action="../exercice5">
    <button type="submit">exercice 5</button>
  </form>
</body>
</html>
<?php
if (!empty($_GET['log']) && !empty($_GET['pass'])) {
  setcookie('login', $_GET['log'], time() + 20, '/', null, false);
  setcookie('password', $_GET['pass'], time() + 20, '/', null, false);
  echo $_COOKIE['password']. $_COOKIE['login'];
}
?>
