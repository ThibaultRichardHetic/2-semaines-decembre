<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2 semaines decembre</title>
    <link href="https://fonts.googleapis.com/css?family=Bungee|Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.min.css">
    <link rel="stylesheet" href="styles/style.min.css">
</head>
<body>
  <div class="container">
    <div class="container__navbar">
      <form class="navbar__research" method="post">
        <input name="saisie" type="text" placeholder="Recherche" required />
      </form>
      <div class="navbar__loupe"></div>
      <div class="navbar__logo"></div>
      <div class="navbar__profil"></div>
    </div>
    <div class="container__sidebar">
      <div class="sidebar__avatarpicture">
          <div class="avatarpicture__pseudo"><p>Pseudo</p></div>
      </div>
      <div class="sidebar__topics">
          <ul>
            <li class="topics__mytopics"><a href="#">Mes Thèmes</a></li>
            <li class="topics__videos"><a href="#">Vidéos</a></li>
            <li class="topics__sport"><a href="#">Sport</a></li>
            <li class="topics__videosgames"><a href="#">Jeux Vidéos</a></li>
            <li class="topics__art"><a href="#">Art</a></li>
            <li class="topics__music"><a href="#">Musique</a></li>
            <li class="topics__myclubs"><a href="#">Mes Clubs</a></li>
          </ul>
      </div>
    </div>
    <div class="main">
      <img class="main__backgroundimg" src="src/background_space.png" alt="image représentant l'espace avec des planètes. Servant de d'image de fond au fil découverte">
      <img class="main__spacemanimg" src="src/illu_astro-feed.svg" alt="image représentant l'espace avec des planètes. Servant de d'image de fond au fil découverte">
      <div class="main__title">
        <h2>Découverte</h2>
      </div>
    </div>
  </div>
  <script src="scripts/app.js" > </script>
</body>
</html>
