<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CreHappy</title>
    <link href="https://fonts.googleapis.com/css?family=Bungee|Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.min.css">
    <link rel="stylesheet" href="styles/style.min.css">
</head>
<body class="body--myjournal">
  <div class="container">
    <div class="container__navbar">
      <form class="navbar__research" method="post">
        <input name="saisie" type="text" placeholder="Recherche" required />
      </form>
      <div class="navbar__magnifyingglass"><a href="#"><img src="src/Navbar/Glass.png"></a></div>
      <div class="navbar__logo"></div>
      <div class="navbar__profil"><a href="#"><img src="src/Navbar/User.png"></a></div>
    </div>
    <div class="container__sidebar">
      <div class="sidebar__avatarpicture">
        <img src="src/Discovery/Main/Posts/PP/images.png" alt="">
        <div class="avatarpicture__pseudo"><p>Pseudo</p></div>
      </div>
      <div class="sidebar__topics">
          <ul>
            <li class="topics__mytopics"><a href="#">Mes Thèmes</a></li>
            <li class="topics__videos"><a href="#">Musique</a><img src="src/Sidebar/Hexagon_White.png"><img src="src/Sidebar/Music.png" class="topics__iconmusic"></li>
            <li class="topics__sport"><a href="#">Sport</a><img src="src/Sidebar/Hexagon_White.png"><img src="src/Sidebar/Sport.png" class="topics__iconsport"></li>
            <li class="topics__videosgames"><a href="#">Jeux</a><img src="src/Sidebar/Hexagon_White.png"><img src="src/Sidebar/Controller.png" class="topics__iconcontroller"></li>
            <li class="topics__art"><a href="#">Art</a><img src="src/Sidebar/Hexagon_White.png"><img src="src/Sidebar/Pencil.png" class="topics__iconpencil"></li>
            <li class="topics__music"><a href="#">Cuisine</a><img src="src/Sidebar/Hexagon_White.png"><img src="src/Sidebar/Cook.png" class="topics__iconcook"></li>
            <li class="topics__tutoriels"><a href="#">Tutoriels</a><img src="src/Sidebar/Hexagon_White.png"><img src="src/Sidebar/Scissors.png" class="topics__iconscissors"></li>
            <li class="topics__humor"><a href="#">Humour</a><img src="src/Sidebar/Hexagon_White.png"><img src="src/Sidebar/Tongue.png" class="topics__icontongue"></li>
            <li class="topics__myclubs"><a href="#">Mes Clubs</a><img src="src/Sidebar/Cross.png"></li>
          </ul>
      </div>
    </div>
    <div class="main">
      <div class="main__backgroundimg"></div>
      <div class="main__title">
        <h2>Mon Journal</h2>
      </div>
      <div class="main__journal">
        <div class="journal__background"><img src="src/Myjournal/journal.svg" alt=""></div>
        <div class="journal__pp"></div>
        <div class="journal__buttonchange"><p>Changer</p></div>
        <div class="journal__informations">
          <div class="informations__surname"><p>Mon surnom:</p><input type="text" value="................"name="firstname"></div>
          <div class="informations__age"><p>Mon âge:</p><input type="text" value="...."name="firstname"><p>ans.</p></div>
          <div class="informations__class">
            <p>Ma classe:</p>
            <select>
              <option value="...">...</option>
              <option value="CP">CP</option>
              <option value="CE1">CE1</option>
              <option value="CE2">CE2</option>
              <option value="CM1">CM1</option>
              <option value="CM2">CM2</option>
              <option value="6éme">6éme</option>
            </select>
          </div>
          <div class="informations__brothers"><p>Mes frères et soeurs sur CréHappy:</p><input type="text" value="@MonFrère......."name="firstname"></div>
        </div>
        <div class="journal__mycreations">
          <div class="mycreations__public"></div>
          <div class="mycreations__public2">Mes créas publiques</div>
          <div class="mycreations__private"></div>
          <div class="mycreations__private2">Mes créas privées</div>
        </div>
        <div class="journal__mybadges">
          <h2>Mes Badges</h2>
          <div class="mybadges__badge1">
            <img class="badge1__img" src="src/Myjournal/trophée_créas_argent.svg" alt="">
            <h4>Quastione igitur !</h4>
            <p class="badge1__p">Suscipit consectetur ipsum totam voluptatum quod laudantium fugiat pariatur.</p>
          </div>
          <div class="mybadges__badge2">
            <img class="badge2__img" src="src/Myjournal/trophée_jeux_diamant.svg" alt="">
            <h4>Quastione igitur !</h4>
            <p class="badge2__p">Suscipit consectetur ipsum totam voluptatum quod laudantium fugiat pariatur.</p>
          </div>
        </div>
        <div class="journal__settings">
          <img src="src/Myjournal/Settings.png" alt="">
          <p class="settings__p">Paramètres</p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <ul>
      <li class="footer__aboutus"><a href="#">à propos de nous</a></li>
      <li class="footer__support"><a href="#">Support</a></li>
      <li class="footer__api"><a href="#">API</a></li>
      <li class="footer__confidentiality "><a href="#">Confidentialité</a></li>
      <li class="footer__conditions"><a href="#">Conditions</a></li>
      <li class="footer__profil"><a href="#">Profil</a></li>
      <li class="footer__language"><a href="#">Langue</a></li>
    </ul>
  </footer>
  <script src="scripts/app.js"></script>
</body>
</html>
