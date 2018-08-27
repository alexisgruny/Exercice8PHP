<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ex01</title>
</head>
<body>
  <h1>exercice 1</h1>
  <?php
  echo 'user agent : ' . $_SERVER['HTTP_USER_AGENT'] . ', adresse IP : ' . $_SERVER['REMOTE_ADDR'] . ', nom du serveur : ' . $_SERVER['SERVER_NAME'];
  ?>
</body>
</html>
