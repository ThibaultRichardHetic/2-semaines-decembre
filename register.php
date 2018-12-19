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
</head>
<body class="body--registration">
  <main>
    <section class="section--step1 section--default js-section--step1">
      <div class="step1__header header--default">
        <div class="header__back js-back">   
          <p><span><</span> <a href="landing.php">Retour</a></p>
        </div>
        <img class="header__logo" src="src/all/logo.png" alt="#">
        <div class="header__button js-next js-next">
          <p>Continuer</p>
        </div>
      </div>
      <div class="step1__content content--default">
        <h4 class="step1__title title--default">Je crée mon compte</h4>
        <form methode="post" action="#">
          <input type="text" name="name" placeholder="Mon surnom" required
        minlength="4" maxlength="8" size="10">
        <p>Ma date de naissance :</p>
          <input placeholder="Mon age" type="date" name="birth" value="2010-01-01" required>
          <select name="level" placeholder="classe" required>
            <option value="">Ma classe</option>
            <option value="cp">CP</option>
            <option value="ce1">CE1</option>
            <option value="ce2">CE2</option>
            <option value="cm1">CM1</option>
            <option value="cm2">CM2</option>
          </select>
        </form>
      </div>
    </section>
    <section class="section--step2 section--default js-section--step2">
      <div class="step2__header header--default">
        <div class="header__back js-back">   
          <p><span><</span> Retour</p>
        </div>
        <img class="header__logo" src="src/all/logo.png" alt="#">
        <div class="header__button js-next">
          <p>Continuer</p>
        </div>
      </div>
      <div class="step2__content content--default"> 
        <h4 class="step2__title title--default">Je choisis mon avatar</h4>
        <div class="step2__circle">
          <img src="src/Discovery/Main/Posts/PP/images.png" alt="avatar de l'utilisateur">
        </div>
        <div class="content__button">
          <p>Personnaliser</p>
        </div>
      </div>
    </section>
    <section class="section--step3 section--default js-section--step3">
      <div class="step3__header header--default">
        <div class="header__back js-back">   
          <p><span><</span> Retour</p>
        </div>
        <img class="header__logo" src="src/all/logo.png" alt="#">
        <div class="header__button js-next">
          <p>Continuer</p>
        </div>
      </div>
      <div class="step3__content content--default">
        <h4 class="step3__title title--default">Informations de sécurité</h4>
        <div class="content--form">
          <div class="content--left">
            <form methode="post" action="#">
              <div class="form--info">
                <input type="email" placeholder="Email administrateur">
                <div class="info js-info-1">
                  <p>i</p>
                </div>
              </div>
              <input type="email" placeholder="Confirmation de l’email administrateur">
              <div class="form--info">
                <input type="password" placeholder="Code Parent">
                <div class="info js-info-2">
                  <p>i</p>
                </div>
              </div>
              <input type="password" placeholder="Confirmation Code Parent">
            </form>
            <div class="info--hidden hidden-1 js-hidden-1">
              <p>
                L’email administrateur est l’email du parent ou représentant légal de l’enfant. Il vous servira à la confirmation du compte et éventuellement à récuperer des informations oubliées.
              </p>
            </div>
            <div class="info--hidden hidden-2 js-hidden-2">
              <p>
                 Le Code Parent est le code qui vous permet d’accéder aux paramètres du compte de l’enfant et de définir le contrôle parental
              </p>
            </div>
          </div>
          <div class="content--right">
            <form methode="post" action="#">
              <input type="email" placeholder="Email de l’enfant (optionnel)">
              <input type="email" placeholder="Confirmation de l’email de l’enfant">
              <input type="password" placeholder="Mot de passe du compte">
              <input type="password" placeholder="Confirmation du mot de passe">
            </form>
          </div>
          <div class="clear"></div>
        </div>    
      </div>
    </section>
    <section class="section--step4 section--default js-section--step4">
      <div class="step4__header header--default">
        <div class="header__back js-back">   
          <p><span><</span> Retour</p>
        </div>
        <img class="header__logo" src="src/all/logo.png" alt="#">
        <div class="header__button js-next">
          <p>Continuer</p>
        </div>
      </div>
      <div class="step4__content content--default">
        <h4 class="step4__title title--default">Un email de confirmation vous a été envoyé</h4>
        <p>
          Vous trouverez dans votre boîte mail un lien cliquable amenant à la prochaine étape d’inscription.
        </p>
        <p>
          Si vous ne trouvez pas l’email d’activation, vérifiez d’abord votre dossier courrier indésirable puis contactez-nous par mail à <span>creahappy.france@gmail.com</span>.
        </p>
      </div>
    </section>
    <section class="section--step5 section--default js-section--step5">
     <div class="step5__header header--default">
        <div class="header__back js-back">   
          <p><span><</span> Retour</p>
        </div>
        <img class="header__logo" src="src/all/logo.png" alt="#">
      </div>
      <div class="step5__content content--default">
        <h4 class="step5__title title--default">Informations de sécurité</h4>
        <p>
          Afin de confirmer votre identité et d’assurer la sécurité du site, il est nécessaire de télécharger une <span class="important--orange-bold">pièce justificatives d'identité de l’enfant</span> et du <span class="important--orange-bold">représentant légal</span>.
        </p>
        <div>
          <form id="dropFileForm" action="" method="post" onsubmit="uploadFiles(event)">
              <input type="file" accept=".pdf" name="files[]" id="fileInput" multiple onchange="addFiles(event)">

              <label for="fileInput" id="fileLabel" ondragover="overrideDefault(event);fileHover();" ondragenter="overrideDefault(event);fileHover();" ondragleave="overrideDefault(event);fileHoverEnd();" ondrop="overrideDefault(event);fileHoverEnd();
                    addFiles(event);">
                <i class="fa fa-download fa-5x"></i>
                <!-- <br> -->
                <span id="fileLabelText">
                  <p>Choisir des fichiers </p>
                  <p>ou</p>
                  <p>drag and drop</p>
                
                </span>
                <br>
                <span id="uploadStatus"></span>
              </label>
            </form>
        </div>
        <p>
          En inscrivant votre enfant, vous acceptez nos <span class="important--red">Conditions d'utilisation</span>, notre <span class="important--red">Politique de confidentialité</span> et notre <span class="important--red">Utilisation des cookies</span>.
        </p>
        <div class="content__button js-next-inscription">
          <p>
             Inscription
          </p>
        </div>
      </div>
    </section>
    <section class="section--step6 section--default js-section--step6">
      <div class="step6__header header--default">
        <img class="header__logo" src="src/all/logo.png" alt="#">
      </div>
      <div class="step6__content content--default">
        <h4 class="step6__title title--default">Demande d’inscription enregistrée !</h4>
        <p>
          Votre demande d’inscriptation a été enregistrée et mise en attente de validation.
        </p>
        <p> 
          Une notification de validation du compte vous sera envoyée par email dans les deux jours. 
        </p>
        <p>
          Pour plus d’informations, merci de nous <span>contacter</span>.
        </p>
        <div class="content__button">
          <p>
            <a href="discover.php">Accés à la démo</a>    
          </p>
        </div>
      </div>
    </section>
    <section class="section--step7 js-section--step7">
      <p>
        Chers parents, bienvenue.
      </p>
      <p>
        Félicitations, vous venez d'inscrire votre enfants sur <span>Crehappy !</span> Il va ainsi avoir accès à son premier réseau social, mais pas n'importe lequel.
      </p>
      <p>
        En effet, Crehappy est un réseau social qui se différencie des autres car il est destiné aux enfants. C’est un lieu où les ils pourront partager pas mal de choses (Photos, Recettes, Créations ...) en toute sécurité avec d'autres jeunes de leur âge.
      </p>
      <p>
        Ils pourront aussi s'entrainer avec des exercices ludiques (Maths, Français, Logique ...). Mais ne vous inquiétez pas, vous aurez bien évidemment le droit de voir les contenus partagés par votre enfant.
      </p>
      <p>
        Le respect étant primordial pour nous, un système de signalement sera mis en place pour éviter les débordements. Ainsi, votre enfant découvrira les réseaux sociaux dans un espace sain, sécurisé et éducatif. Nous vous remercions de votre confiance et nous ferons tout pour maintenir cette confiance au plus haut.
      </p>
    </section>
  </main>
  <footer>
  </footer>
  <script src="scripts/register.js"></script>
</body>
</html>
