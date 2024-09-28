<?php
// Informations d'identification de la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybercriminalite";

// Création d'une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérification si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête SQL pour vérifier les identifiants de connexion
    $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Les identifiants sont valides, l'utilisateur est connecté avec succès
        echo "Connexion réussie !";

        // Redirection vers la page Accueil.php
        header("Location: Accueil.php");
        exit();
    } else {
        // Les identifiants sont invalides, affichage d'un message d'erreur
        echo "Identifiants invalides !";
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
?>