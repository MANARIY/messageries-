<?php
$servername = "localhost"; // Nom du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "cybercriminalite"; // Nom de la base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Vérifier les informations de connexion dans la base de données
    $sql = "SELECT * FROM login  WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // L'utilisateur est authentifié avec succès
        echo "Connexion réussie!";
        header("Location: Accueil.php");
    } else {
        // Les informations de connexion sont incorrectes
        echo "Identifiants invalides.";
    }
}

// Fermer la connexion
$conn->close();
?>