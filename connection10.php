<?php
if(isset($_POST['submit'])){
// Connexion à la base de données 
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "cybercriminalite";
$conn = mysqli_connect($host, $user, $password, $dbname);
// Vérification de la connexion 
if (!$conn) { die("La connexion à la base de données a échoué : " . mysqli_connect_error()); }
// Traitement du formulaire de modification de mot de passe 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $Email = $_POST["Email"]; 
    $password = $_POST["password"]; 
    $confirmPassword = $_POST["confirmPassword"];
    // Vérification si l'adresse e-mail existe dans la base de données
$sql = "SELECT * FROM enregistre WHERE email = '$Email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo"That Email is not exist.";
} else {
    // Vérification si les champs du nouveau mot de passe et de la confirmation du mot de passe correspondent
    if ($password !== $confirmPassword) {
        echo"The place of new password and confirmation password are not match.";
    } else {
        // Mise à jour du mot de passe dans la base de données
        //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE enregistre SET password = '$password' WHERE Email = '$Email'";
        mysqli_query($conn, $sql);

        echo "Updated successfuly.";
        header("Location: login.php");
    exit(); 
    }
}}
// Fermeture de la connexion à la base de données 
mysqli_close($conn);
}
?>
