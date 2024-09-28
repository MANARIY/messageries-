<!DOCTYPE html>
<html>
<head>
  <title>Profil utilisateur</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link rel="shortcut icon" href="../image/image1.png" type="image1/x-con">
  <script src="script.js"></script>
</head>
<body>
  <header>
    <h1>Profil utilisateur</h1>
  </header>

  <main>
    <section id="user-info">
      <h2>Informations personnelles</h2>
      <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" readonly>
      </div>
      <div>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" readonly>
      </div>
    </section>

    <section id="user-settings">
      <h2>Paramètres</h2>
      <div>
        <label for="notification">Notifications :</label>
        <input type="checkbox" id="notification" name="notification">
        <span>Activer les notifications</span>
      </div>
      <div>
        <label for="language">Langue :</label>
        <select id="language" name="language">
          <option value="en">Anglais</option>
          <option value="fr">Français</option>
          <option value="es">Espagnol</option>
        </select>
      </div>
    </section>
  </main>

  <footer>
    <!-- Ajoutez un pied de page ici si nécessaire -->
  </footer>

  <script>
    // Récupérer les éléments du formulaire d'informations utilisateur
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');

    // Récupérer les informations utilisateur depuis une source de données (par exemple, une base de données)
    // et mettre à jour les champs du formulaire
    fetch('/api/user') // Remplacez cette URL par l'API ou la source de données appropriée
      .then(response => response.json())
      .then(user => {
        nameInput.value = user.name;
        emailInput.value = user.email;
      })
      .catch(error => {
        console.error('Erreur lors de la récupération des informations utilisateur :', error);
      });
  </script>
</body>
</html>