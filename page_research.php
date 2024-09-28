<!DOCTYPE html>
<html>
<head>
  <title>Page de recherche</title>
  <link rel="stylesheet" type="text/css" href="../css/style7.css">
  <link rel="shortcut icon" href="../image/image1.png" type="image1/x-con">
  <script src="script.js"></script>
</head>
<body>
  <header>
    <h1>Page de recherche</h1>
  </header>

  <main>
    <section id="search-form">
      <h2>Recherche</h2>
      <form>
        <input type="text" id="search-input" placeholder="Entrez votre recherche">
        <button type="submit">Rechercher</button>
      </form>
    </section>

    <section id="search-results">
      <h2>Résultats de la recherche</h2>
      <ul id="results-list"></ul>
    </section>
  </main>

  <script>
    // Récupérer les éléments du formulaire de recherche et des résultats
    const searchForm = document.querySelector('#search-form form');
    const searchInput = document.getElementById('search-input');
    const resultsList = document.getElementById('results-list');

    // Gérer la soumission du formulaire de recherche
    searchForm.addEventListener('submit', event => {
      event.preventDefault(); // Empêcher le rechargement de la page

      const searchTerm = searchInput.value.trim(); // Obtenir le terme de recherche
       // Vérifier si le terme de recherche est vide
       if (searchTerm === '') {
        alert('Veuillez entrer un terme de recherche.');
        return;
      }

      // Réinitialiser la liste des résultats
      resultsList.innerHTML = '';

      // Effectuer une recherche (remplacez ce code avec votre logique de recherche réelle)
      const results = [
        'Résultat 1',
        'Résultat 2',
        'Résultat 3'
      ];

      // Afficher les résultats de la recherche
      results.forEach(result => {
        const li = document.createElement('li');
        li.textContent = result;
        resultsList.appendChild(li);
      });
    });
  </script>
  <header>
  <nav>
      <ul>
    <li><button class="cn"><a href="important.php">importance</a></button></li>
      <li><button class="cn"><a href="privacy.php">privacy</a></button></li>
      <li><button class="cn"><a href="cookies.php">cookies</a></button></li>
      <li><button class="cn"><a href="important.php">importance</a></button></li>
      <li><button class="cn"><a href="privacy.php">privacy</a></button></li>
      <li><button class="cn"><a href="cookies.php">cookies</a></button></li>
        <li><button class="cn"><a href="mentions_legales.php">mentions legales</a></button></li>
        <li><button class="cn"><a href="confidentialite.php">confidentialite</a></button></li>
        <li><button class="cn"><a href="contact.php">contact</a></button></li>
        <li><button class="cn"><a href="service.php">service</a></button></li>
        <li><button class="cn"><a href="signalement.php">Signalement</a></button></li>
        <li><button class="cn"><a href="condition_d'utilisation.php">condition d'utilisation</a></button></li>
      </ul>
    </nav>
      
  <footer>
    <p>&copy; 2024 Répression de la cybercriminalité. Tous droits réservés.</p>
  </footer>
  </header>
</body>
</html>