<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybercriminalite";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$password =$_POST['password'];

// Requête SQL pour insérer les données
$sql = "INSERT INTO enregistre (nom, email, password) VALUES ('$nom', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Données insérées avec succès";
    header("Location: login.php");
} else {
    echo "Erreur lors de l'insertion des données : " . $conn->error;
}

// Fermeture de la connexion
$conn->close();
?>