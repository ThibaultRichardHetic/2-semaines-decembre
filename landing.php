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
<body class="body--landing">
  <header>
    <img class="logo" src="src/all/logo.png" alt="">
    <h3>CréHappy</h3>
    <div class="button--fixed">
      <div class="button__register">
        <p>
          <a href="register.php">je m’inscris</a>
        </p>
      </div>
      <p class="register__interrogation">
        Déjà inscrit?
      </p>
      <div class="button__connexion">
        <p>
          <a href="#">Se connecter</a>
        </p>
      </div>
    </div>
    <div class="img--fixed">
      <img src="src/landing/planet.png" data-cursor-depth="0.005" class="cursor-parallax lazy" alt="">
    </div>
  </header>
  <main id="fullpage">
    <section class="section--step1 section--default section">
      <div class="step1__text text-container--default cursor-parallax lazy" data-cursor-depth="0.020">
        <img src="src/landing/bulle03.svg" alt="">
        <h3>Bienvenue à toi !</h3>
      </div>
      <img class="men--default men--right cursor-parallax lazy" data-cursor-depth="0.040" data-cursor-depth="0.040" src="src/landing/illu_astro-accueil.png" alt="">
    </section>
    <section class="section--step2 section--default section">
      <div class="step2__text text-container--default cursor-parallax lazy" data-cursor-depth="0.020">
        <img src="src/landing/bulle02.svg" alt="">
        <p>
           Ici tu t'inscris sur un espace de <span class="important--red">partage</span>, <span class="important--red">liberté</span>, <span class="important--red">positivité</span>, <span class="important--red">sécurité</span> et surtout : <span class="important--red important--bold">créativité</span>. C'est aussi ici que tu pourra retrouver tes amis et jeunes de ton âge.
        </p>
      </div>
      <img class="men--default cursor-parallax lazy" src="src/landing/illu_astro-accueil2.svg" data-cursor-depth="0.040" alt="">
    </section>
    <section class="section--step3 section--default section">
      <div class="step3__text text-container--default cursor-parallax lazy" data-cursor-depth="0.020">
        <img src="src/landing/bulle03.svg" 
          alt="">
        <p>
          Bientôt tu vas avoir <span class="important">ton journal</span> et ton fil de <span class="important">découverte</span>. Un journal <span class="important">public</span> où ce que tu met sera visible par tous, un journal <span class="important">privé</span> que tu seras seul à voir, et un fil de découverte qui te proposera des <span class="important important--bold">créas</span> qui te correspondent.
        </p>
      </div>
      <img class="men--default men--right cursor-parallax lazy" data-cursor-depth="0.040" src="src/landing/illu_astro-accueil3.svg" alt="">
    </section>
    <section class="section--step4 section--default section">
      <div class="step4__text text-container--default cursor-parallax lazy" data-cursor-depth="0.020">
        <img src="src/landing/bulle02.svg" alt="">
        <p>
          Tu peux aussi jouer à des <span class="important--red">jeux</span> et même consulter les <span class="important--red important--bold">créas</span> des autres sur des sujets trop cools !        
        </p>
      </div>
      <img class="men--default cursor-parallax lazy" src=" src/landing/illu_astro-accueil2.svg"  data-cursor-depth="0.040" alt="">
    </section>
    <section class="section--step5 section--default section">
      <div class="step5__text text-container--default cursor-parallax lazy" data-cursor-depth="0.020">
        <img src="src/landing/bulle03.svg" alt="">
        <p>
          Fais quand même attention! Il y a peu de règles mais une super importante : le <span class="important important--bold">respect</span> des autres. Donc pas de commentaire méchant, pas de gros mots ou d’insultes !        
        </p>
      </div>
      <img class="men--default men--right cursor-parallax lazy" data-cursor-depth="0.040" src="src/landing/illu_astro-accueil4.svg" alt="">
    </section>
    <section class="section--step6 section--default section">
      <div class="step6__text text-container--default cursor-parallax lazy" data-cursor-depth="0.020">
        <img src="src/landing/bulle02.svg" alt="">
        <p>
          Amuse toi, ta seule limite est ton imagination !        
        </p>
      </div>
      <img class="men--default cursor-parallax lazy" src="src/landing/illu_astro-accueil5.svg" data-cursor-depth="0.040" alt="">
    </section>
   
  </main>

  <footer>

  </footer>

  <script src="library/fullpage/fullpage.js"></script>
  <script src="scripts/landing.js"></script>
</body>
</html>
