<?php
// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST['login'])) {
  // Récupérer les données du formulaire
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Vérifier les informations de connexion dans la base de données
$servername="localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname="cybercriminalite";
  try {
    $dbh = new PDO($dsn, $dbUsername, $dbPassword);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour vérifier les informations de connexion
    $query = "SELECT * FROM login WHERE email = :email";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      $hashedPassword = $user['password'];

      // Vérifier si le mot de passe correspond
      if (password_verify($password, $hashedPassword)) {
        // Mot de passe correct, connectez l'utilisateur
        session_start();
        $_SESSION['email'] = $user['email'];
        // Rediriger vers la page d'accueil ou toute autre page sécurisée
        header("Location: Accueil.php");
        
      } else {
        // Mot de passe incorrect
        $error = "Mot de passe incorrect";
      }
    } else {
      // Nom d'utilisateur introuvable
      $error = "Nom d'utilisateur introuvable";
    }
  } catch (PDOException $e) {
    // Gérer les erreurs de la base de données
    $error = "Erreur de la base de données : " . $e->getMessage();
  }
}
?>