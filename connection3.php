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
$email = $_POST['email'];
$password = $_POST['password'];

// Requête SQL pour vérifier les informations de connexion
$sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // L'utilisateur est connecté avec succès
    echo "Connexion réussie";
} else {
    // Les informations de connexion sont incorrectes
    echo "Identifiants invalides";
}

// Fermeture de la connexion
$conn->close();
?>