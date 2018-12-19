<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CreHappy</title>
    <link rel="icon" type="image/png" href="src/all/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Bungee|Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.min.css">
    <link rel="stylesheet" href="styles/style.min.css">
    favic
</head>
<body class="body--commentary">

    <?php 
    include 'header-side.php';
    ?>

    <div class="main">
      <div class="main__backgroundimg"></div>
      <img class="main__spacemanimg" src="src/illu_astro-feed.svg" alt="image représentant l'espace avec des planètes. Servant de d'image de fond au fil découverte">
      <div class="main__title">
        <h2>Découverte</h2>
      </div>
      <div class="main__posts">
        <div class="posts__post1">
          <div class="post1__elements">
            <img src="src/Discovery/Main/Posts/PP/images.png" class="post1__elements__pp">
            <div class="post1__elements__atsign"><p>@facs_loulou</p></div>
            <div class="post1__elements__text"><p>Tuto cuisine avec ma maman</p></div>
            <iframe class="iframe" width="90%" height="50%" src="https://www.youtube.com/embed/PKqLCA_DMuo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="post1__elements__likes"><p>350 J'aimes</p><p>5 Commentaires</p></div>
          </div>
          <div class="post1__form">
            <FORM>
              <input wrap="virtual" name="nom" rows=4 cols=28% placeholder="Ton commentaire..."/>
            </FORM>
          </div>
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
  <script src="scripts/discover.js"></script>
</body>
</html>

<!-- test un peu de php -->

    <?php 

$bdd = new PDO("mysql:host=localhost;dbname=creahappy;charset=utf8", "root", "");

$requete_selective = $bdd->query("SELECT id, pseudo");
$requete = $bdd->query("SELECT * FROM pseudo");

$result = $requete->fetch();

echo $result['comment_post'];

?>
<!-- test un peu de php -->
