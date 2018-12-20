<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Une plateforme ultra-sécurisée où chaque enfant peut poster des contenus qu’il a créés dans la positivité et le respect.">
    <meta name="robot" content="noindex">
    <meta name="robot" content="nofollow">
    <title>CreHappy</title>
    <link rel="icon" type="image/png" href="src/all/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Bungee|Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.min.css">
    <link rel="stylesheet" href="styles/style.min.css">
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

<?php
  $commentaire = $_POST['commentaire'];
  $original = $commentaire;
  $checkurl = "http://api1.webpurify.com/services/rest/?method=webpurify.live.replace&api_key=24ffa08383a6673e58d9635579dd55ef&lang=fr&text=".urlencode($commentaire);
  $response = simplexml_load_file($checkurl,'SimpleXMLElement', LIBXML_NOCDATA);
  $modifie = $response->text;
?>

            <?php
class Diff {
  public static function diffArray($old, $new){
      $matrix = array();
      $maxlen = 0;
      foreach($old as $oindex => $ovalue){
          $nkeys = array_keys($new, $ovalue);
          foreach($nkeys as $nindex){
              $matrix[$oindex][$nindex] = isset($matrix[$oindex - 1][$nindex - 1]) ? $matrix[$oindex - 1][$nindex - 1] + 1 : 1;
              if($matrix[$oindex][$nindex] > $maxlen){
                  $maxlen = $matrix[$oindex][$nindex];
                  $omax = $oindex + 1 - $maxlen;
                  $nmax = $nindex + 1 - $maxlen;
              }
          }
      }
      if($maxlen == 0) return array(array('d'=>$old, 'i'=>$new));
      return array_merge(
          self::diffArray(array_slice($old, 0, $omax), array_slice($new, 0, $nmax)),
          array_slice($new, $nmax, $maxlen),
          self::diffArray(array_slice($old, $omax + $maxlen), array_slice($new, $nmax + $maxlen)));
  }
  public static function htmlDiff($old, $new){
      $ret = '';
      $diff = self::diffArray(explode(' ', $old), explode(' ', $new));
      foreach($diff as $k){
          if(is_array($k)){
              $ret .= (!empty($k['d'])?'<del>'.implode(' ',$k['d']).'</del> ':'').(!empty($k['i'])?'<ins>'.implode(' ',$k['i']).'</ins> ':'');
          }else{
              $ret .= $k . ' ';
          }
      }
      return $ret;
  }
}
$is_possible = 0;
$ladif = Diff::htmlDiff($original, $modifie);
 if($response)
  {
    if($original == $modifie)
    {
     // echo $original;
      $is_possible += 1;
    }
    else if($original != $modifie)
    {
     // echo 'la c est non';
      echo "<script>alert('tu as utilisé des mots non apropriés')</script>";
      echo "<script>alert('tu as utilisé des mots non apropriés')</script>";
      //redirect('admin/ahm/panel');
    }
  }
//echo Diff::htmlDiff($original, $modifie);
//print_r($response);
// if($is_possible > 0)
// {
//   echo "<script>alert('commentaire envoyé')</script>";
//   echo "<script>alert('commentaire envoyé')</script>";

// }
?>
   

            <p class="php-here">
              <?php
              if($is_possible > 0)
              {
                echo "<script>alert('commentaire envoyé')</script>";
                echo "<script>alert('commentaire envoyé')</script>";
                echo $original;
                // echo "<script>
                // let position = document.querySelector('.php-here')
                // position.innerHtml = $original
                // </script>";

                // let newLi = document.createElement('li')
                // // newLi.createElement('a')
                // newLi.innerHtml = $clubName.value
                // newLi.innerHTML = "<a>" + $clubName.value + "</a>"
                // //newLi.style.color = "#fff"
                // newLi.className = "topics__mynewclub"
                // $sideBarre.appendChild(newLi)
                // newLi = localStorage.getItem('newLi')
                // localStorage.setItem('test', 'test2')
                // console.log('c est sencé marcher')


              }
              ?>
            </p>
            <form action="#" method="post">
              <input class="text--comm" name="commentaire" placeholder="Ton commentaire..." autocomplete="off"/>
              <input class="submit" type="submit" name="submit_commentaire">
            </form>






    
<?php
// echo 'texte modifié :  ';
// echo $modifie;
// echo '</br>';
// echo 'texte original :  ';
// echo $original;
// echo '</br>';
// echo '</br>';
// if($modifie = $original){
//   echo 'on peut l envoyer';
// } ?>




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
