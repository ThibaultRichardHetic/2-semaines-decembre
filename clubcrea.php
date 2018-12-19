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

    <?php 
    include 'header-side.php';
    ?>

    <main>
        <section class="section--step1">
            <h3>Nouveau club</h3>
            <div class="step1__content">
                <form action="#" methode="post">
                    <div class="part--up">
                        <p>
                            Ce club s'appelle :
                        </p>
                        <input class="js-club-name" type="text" placeholder="Nom du club">
                    </div>
                    <div class="part--down">
                        <p>
                            Les membres de mon club :
                        </p>
                        <div>
                            <ul id="listitem"></ul>
                            <input type="text" id="addlist" placeholder="surnom de ton ami" onfocus="clearValue(this)">
                            <button id="clone-btn">+ ajoute un ami</button>
                            <button id="remove-btn">retire un ami</button>
                        </div>
                    </div>
                    <div class="button--creation js-creation-button">
                        <p>Créer</p>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="scripts/clubcrea.js"></script>
</body>
</html>


