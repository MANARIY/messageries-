<?php
$notification = "Notification importante : Signalez toute activité suspecte immédiatement.";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Page de signalement</title>
  <link rel="stylesheet" type="text/css" href="../css/stylee1.css">
  <link rel="shortcut icon" href="../image/image1.png" type="image1/x-con">
  <style>
    .success-notification {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      text-align: center;
      display: none;
    }
  </style>
</head>
<body>
  <header>
  <?php if (!empty($notification)) : ?>
      <div class="notification"><?php echo $notification; ?></div>
    <?php endif; ?>
    <div class="image1">
      <img src="../image/image1.png" with="100%" alt="image1">
    </div>
    <nav>
      <ul>
        <li><button class="cn"><a href="Accueil.php">Accueil</a></button></li>
        <li><button class="cn"><a href="login.php">Se connecter</a></button></li>
        <li><button class="cn"><a href="contact.php">contact</a></button></li>
        <li><button class="cn"><a href="service.php">service</a></button></li>
        <li><button class="cn"><a href="signalement.php">Signalement</a></button></li>
      </ul>
    </nav>
  </header>
  <h1>Signalement de Cybercriminalité</h1>

  <form action="connexion3.php" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br>

    <label for="description">Description du signalement :</label><br>
    <textarea id="description" name="description" rows="5" required></textarea><br>

    <input type="submit" value="Envoyer le signalement">
  </form>
  
  <header>
  <nav>
        <ul>
        <li><a href="important.php">importance</a></li>
      <li><a href="privacy.php">privacy</a></li>
      <li><a href="cookies.php">cookies</a></li>
          <li><a href="mentions_legales.php">mentions legales</a></li>
          <li><a href="confidentialite.php">confidentialite</a></li>
          <li><a href="contact.php">contact</a></li>
          <li><a href="service.php">service</a></li>
          <li><a href="signalement.php">Signalement</a></li>
          <li><a href="condition_d'utilisation.php">condition d'utilisation</a></li>
        </ul>
      </nav>
  </header>
  <script src="script.js"></script>
</body>
</html>