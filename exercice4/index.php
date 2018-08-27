<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exercice4</title>
</head>
<p>
  <?php echo isset($_COOKIE['newLogin']) ? $_COOKIE['login'] : 'Aucun login'; ?> <br />
  <?php echo isset($_COOKIE['newPassword']) ? $_COOKIE['password'] : 'aucun mot de passe'; ?>
</p>
<form method="post" action="../exercice3">
  <button type="submit">Back to exercice 3</button>
</form>
</body>
</html>
