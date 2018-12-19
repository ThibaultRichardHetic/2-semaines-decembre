let $addClub = document.querySelector('.js-add-club')

$addClub.addEventListener('click', (e) =>
{
    console.log('test')
    //document.location.href="http://manouvellepage.com"; 
    let CheminComplet = document.location.href
    let CheminRepertoire = CheminComplet.substring( 0 ,CheminComplet.lastIndexOf( "/"))
    let NomDuFichier = CheminComplet.substring(CheminComplet.lastIndexOf( "/" )+1 )
    document.location.href= CheminRepertoire + "/clubcrea.php"
})
