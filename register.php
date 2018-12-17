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
<body class="body--registration">
  <main>
    <section class="section--step1 section--default js-section--step1">
      <div class="step1__header header--default">
        <div class="header__back">   
          <p><span><</span> Retour</p>
        </div>
        <img class="header__logo" src="src/landing/logo-provisoir.png" alt="#">
        <div class="header__button">
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
        <div class="header__back">   
          <p><span><</span> Retour</p>
        </div>
        <img class="header__logo" src="src/landing/logo-provisoir.png" alt="#">
        <div class="header__button">
          <p>Continuer</p>
        </div>
      </div>
      <div class="step2__content content--default"> 
        <h4 class="step2__title title--default">Je choisis mon avatar</h4>
        <div class="step2__circle"></div>
        <div class="content__button">
          <p>Personaliser</p>
        </div>
      </div>
    </section>
    <section class="section--step3 section--default js-section--step3">
      <div class="step3__header header--default">
        <div class="header__back">   
          <p><span><</span> Retour</p>
        </div>
        <img class="header__logo" src="src/landing/logo-provisoir.png" alt="#">
        <div class="header__button">
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
                <div class="info">
                  <p>i</p>
                </div>
              </div>
              <input type="email" placeholder="Confirmation de l’email administrateur">
              <div class="form--info">
                <input type="password" placeholder="Code Parent">
                <div class="info">
                  <p>i</p>
                </div>
              </div>
              <input type="password" placeholder="Confirmation Code Parent">
            </form>
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
        <div class="header__back">   
          <p><span><</span> Retour</p>
        </div>
        <img class="header__logo" src="src/landing/logo-provisoir.png" alt="#">
        <div class="header__button">
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
        <div class="header__back">   
          <p><span><</span> Retour</p>
        </div>
        <img class="header__logo" src="src/landing/logo-provisoir.png" alt="#">
      </div>
      <div class="step5__content content--default">
        <h4 class="step5__title title--default">Informations de sécurité</h4>
        <p>
          Afin de confirmer votre identité et d’assurer la sécurité du site, il est nécessaire de télécharger une <span class="important--orange-bold">pièce justificatives d'identité de l’enfant</span> et du <span class="important--orange-bold">représentant légal</span>.
        </p>
        <div class="step5__file">
          <img src="" alt="">         
          <p> 
          <span class="important--orange">Glissez et déposez</span> vos documents au format <span class="important--orange">.pdf</span>
          </p>
          <p>
            ou
          </p>
          <div class="file__button">
            <p>
              Choisir des fichiers
            </p>
          </div>
        </div>
        <p>
          En inscrivant votre enfant, vous acceptez nos <span class="important--red">Conditions d'utilisation</span>, notre <span class="important--red">Politique de confidentialité</span> et notre <span class="important--red">Utilisation des cookies</span>.
        </p>
        <div class="content__button">
          <p>
             Inscription
          </p>
        </div>
      </div>
    </section>
    <section class="section--step6 section--default js-section--step6">
      <div class="step6__header header--default">
        <img class="header__logo" src="src/landing/logo-provisoir.png" alt="#">
      </div>
      <div class="step6__content content--default">
        <h4 class="step5__title title--default">Demande d’inscription enregistrée !</h4>
        <p>
          Votre demande d’inscriptation a été enregistrée et mise en attente de validation.
        </p>
        <p>
          Une notification de validation du compte vous sera envoyée par email dans les deux jours. 
        </p>
        <p>
          Pour plus d’informations, merci de nous <span>contacter</span>.
        </p>
      </div>

    </section>
  </main>
  <footer>
  </footer>
  <script src="scripts/app.js"></script>
</body>
</html>
