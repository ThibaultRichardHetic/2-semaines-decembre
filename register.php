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
    <section class="section--step1">
      <div class="step1__header">
        <img class="header__logo" src="src/landing/logo-provisoir.png" alt="#">
        <div class="header__button">
          <a href="#">Continuer</a>
        </div>
      </div>
      <div class="step1__content">
        <h1>Je crée mon compte</h1>
        <form methode="post" action="#">
        <input type="text" name="name" required
       minlength="4" maxlength="8" size="10">
       <input type="date" name="birth">
       <input type="text">
       <select name="level">
         <option value="cp">CP</option>
         <option value="ce1">CE1</option>
         <option value="ce2">CE2</option>
         <option value="cm1">CM1</option>
         <option value="cm2">CM2</option>
       </select>
        </form>
      </div>
    </section>

    <section>

    </section>

  </main>
  
  <footer>

  </footer>

  <script src="scripts/app.js"></script>
</body>
</html>
