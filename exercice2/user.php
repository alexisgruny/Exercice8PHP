<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>exercice 2</title>
</head>
<body>
  <p>
    <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
    Et tu as <?php echo $_SESSION['age']; ?> ans.
  </p>
  <p><a href="index.php">back</a></p>
</body>
</html>
