<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robot" content="noindex">
    <meta name="robot" content="nofollow">
    <meta name="description" content="Une plateforme ultra-sécurisée où chaque enfant peut poster des contenus qu’il a créés dans la positivité et le respect.">
    <title>CreHappy</title>
    <link rel="icon" type="image/png" href="src/all/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Bungee|Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.min.css">
    <link rel="stylesheet" href="styles/style.min.css">
</head>
<body class="body--myjournal">

    <?php 
    include 'header-side.php';
    ?>

    <div class="main">
      <div class="main__backgroundimg"></div>
      <div class="main__title">
        <h2>Mon Journal</h2>
      </div>
      <div class="main__journal">
        <div class="journal__background">
          <img src="src/Myjournal/journal.svg" alt="livre dessiné en flat design">
        </div>
        <div class="journal__pp">
          <img src="src/Discovery/Main/Posts/PP/images.png" alt="image de profile utilisateur">
        </div>
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
            <img class="badge1__img" src="src/Myjournal/argent.svg" alt="">
            <p class="badge1__p">Trophée obtenu en ayant gagné 10 parties</p>
          </div>
          <div class="mybadges__badge2">
            <img class="badge2__img" src="src/Myjournal/ruby.svg" alt="">
            <p class="badge2__p">Trophée obtenu en ayant gagné 30 parties</p>
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
  <script src="scripts/allpages.js"></script>
</body>
</html>
