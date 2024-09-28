<?php
// Récupération des données soumises
$username = $_POST['username'];
$email = $_POST['email'];
$carte = $_POST['carte'];
$expiration = $_POST['expiration'];
$cvv = $_POST['cvv'];
$genre = $_POST['genre'];
$age = $_POST['age'];
$pays = $_POST['pays'];


// Tableau pour stocker les erreurs
$errors = [];

// Validation des données
if (empty($username)) {
    $errors[] = "Le nom d'utilisateur est requis.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'adresse e-mail est invalide.";
}

if (empty($carte) || !is_numeric($carte) || strlen($carte) > 16) {
    $errors[] = "Le numéro de carte de crédit est invalide.";
}

if (empty($cvv) || !is_numeric($cvv)) {
    $errors[] = "Le code CVV est invalide.";
}



if (empty($pays)) {
    $errors[] = "Le pays est requis.";
}



// Vérification des erreurs
if (count($errors) === 0) {
    // Connexion à la base de données (remplacez les paramètres par les vôtres)
    $servername = "localhost";
    $usernameDB = "root";
    $passwordDB = "";
    $dbname = "cybercriminalite";

    // Création de la connexion
    $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Préparation et exécution de la requête d'insertion des données
    $sql = "INSERT INTO paiement (username, email, carte,expiration, cvv, genre, age, pays) VALUES ('$username', '$email', '$carte', '$expiration', '$cvv','$genre', '$age', '$pays')";

    if ($conn->query($sql) === TRUE) {
        echo "Les données ont été insérées avec succès.";
    } else {
        echo "Erreur lors de l'insertion des données : " . $conn->error;
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
} else {
    // Affichage des erreurs
    echo "Les erreurs suivantes ont été rencontrées lors de la soumission du formulaire :<br>";
    foreach ($errors as $error) {
        echo "- $error<br>";
    }
}
?>