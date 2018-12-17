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
      <div class="step1__content">
        <h4 class="step1__title">Je crée mon compte</h4>
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
      <div class="step2__content"> 
        <h4 class="step2__title">Je choisis mon avatar</h4>
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
      <div class="step3__content">

      </div>
    </section>
  </main>
  <footer>
  </footer>
  <script src="scripts/app.js"></script>
</body>
</html>
