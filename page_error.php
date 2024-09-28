<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
  // L'utilisateur n'est pas connecté, rediriger vers la page de connexion
 // header("Location: login.php");
// ErrorDocument 404 /page_error.php
  
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Page non trouvée - Erreur 404</title>
  <link rel="shortcut icon" href="../image/image1.png" type="image1/x-con">
</head>
<body>
  <h1>Erreur 404 - Page non trouvée</h1>
  <p>Désolé, la page que vous recherchez n'a pas été trouvée.</p>
  <p>Voici quelques suggestions pour continuer votre navigation :</p>
  <ul>
    <li><a href="Accueil.php">Retourner à la page d'accueil</a></li>
    <li><a href="javascript:history.back()">Revenir à la page précédente</a></li>
  </ul>
</body>
</html>