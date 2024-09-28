<?php
// Connexion à la base de données
$serveur = "localhost"; // Adresse du serveur de base de données
$nomUtilisateur = "votre_nom_utilisateur"; // Nom d'utilisateur de la base de données
$motDePasse = "votre_mot_de_passe"; // Mot de passe de la base de données
$nomBaseDeDonnees = "nom_de_votre_base_de_donnees"; // Nom de la base de données

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $nomUtilisateur, $motDePasse, $nomBaseDeDonnees);

// Vérifier la connexion à la base de données
if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$description = $_POST['description'];

// Enregistrer les données dans la base de données
$sql = "INSERT INTO signalements (nom, email, description) VALUES ('$nom', '$email', '$description')";
if (mysqli_query($connexion, $sql)) {
    // Données enregistrées avec succès

    // Envoyer une notification par email
    $destinataire = "votre_email@example.com";
    $sujet = "Nouveau signalement de cybercriminalité";
    $message = "Un nouveau signalement a été soumis :\n\nNom : $nom\nEmail : $email\nDescription : $description";
    $headers = "From: votre_email@example.com";
    mail($destinataire, $sujet, $message, $headers);

    // Redirection vers une page de confirmation ou de remerciement
    header("Location: confirmation.php");
    exit();
} else {
    // Erreur lors de l'enregistrement des données
    echo "Erreur : " . mysqli_error($connexion);
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>