<?php
//Démarre la session
session_start();
$_SESSION['prenom'] = 'Théodule';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 12;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>exercice 2</title>
</head>
<body>
  <p>Ne serais tu pas , le grand et l'unique ...</p>
  <p><a href="user.php">go >> </a></p>
</body>
</html>
<?php
//Fermeture de la session 
session_write_close()
?>
