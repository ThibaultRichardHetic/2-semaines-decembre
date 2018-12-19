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
<body class="body--clubcrea">
    <div class="container">
        <div class="container__navbar">
            <form class="navbar__research" method="post">
                <input name="saisie" type="text" placeholder="Recherche" required />
            </form>
        <div class="navbar__magnifyingglass"><a href="#"><img src="src/Navbar/Glass.png"></a></div>
        <div class="navbar__logo"></div>
        <div class="navbar__profil"><a href="myjournal.php"><img src="src/Navbar/User.png"></a></div>
    </div>
    <div class="container__sidebar">
        <div class="sidebar__avatarpicture">
            <a href="myjournal.php">
                <img class="js-avatarpicture" src="src/Discovery/Main/Posts/PP/images.png" alt="">
            </a>
            <div class="avatarpicture__pseudo">
                <p>Pseudo</p>
            </div>
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
    <main>
        <section class="section--step1">
            <h3>Nouveau club</h3>
            <div class="step1__content">
                <form action="#" methode="post">
                    <div class="part--up">
                        <p>
                            Ce club s'appelle :
                        </p>
                        <input type="text" placeholder="Nom du club">
                    </div>
                    <div class="part--down">
                        <p>
                            Les membres de mon club :
                        </p>
                        <!-- <img src="src/Navbar/Glass.png" alt="">
                        <input type="text" placeholder="Surnom de mon ami(e)">
                        <div class="add--user js-add--user">
                            <p>
                                ami +
                            </p>
                        </div> -->
                        <div>
                            <ul id="listitem"></ul>
                            <input type="text" id="addlist" placeholder="Add New item" onfocus="clearValue(this)">
                            <button id="clone-btn">+ Add New Item</button>
                            <button id="remove-btn">Delete Item</button>
                        </div>
                    </div>
                    <div class="button--creation">
                        <p>Créer</p>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="scripts/clubcrea.js"></script>
</body>
</html>


