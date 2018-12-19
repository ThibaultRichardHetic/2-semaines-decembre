<<<<<<< HEAD
// // let $addClub = document.querySelector('.js-add-club')

// // console.log($addClub)

// // $addClub.addEventListener('click', (e) =>
// // {
// //     console.log('test')
// //     document.location.href="http://manouvellepage.com"; 
// //     let CheminComplet = document.location.href
// //     let CheminRepertoire  = CheminComplet.substring( 0 ,CheminComplet.lastIndexOf( "/" ) )
// //     let NomDuFichier     = CheminComplet.substring(CheminComplet.lastIndexOf( "/" )+1 )
// //     alert ('NomDuFichier : \n'+NomDuFichier+ ' \n\n CheminRepertoire : \n' +CheminRepertoire+ ' \n\n CheminComplet :\n ' +CheminComplet)    
// // })
=======
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
>>>>>>> 6ca177345b7c309e9e2ca5e76c8bc32190f2def0


// let test = document.querySelector('.posts__post1')
// let tete = document.querySelector('.container__sidebar')
// let body = document.querySelector('.body')
// let backgroundFullScreen = document.querySelector('.background-full-screen')

<<<<<<< HEAD
// test.onclick = () =>
// {
//     test.style.transform = "scale(4, 2)"
//     backgroundFullScreen.style.display = "block"

// }
// tete.onclick = () =>
// {
//     test.style.transform = "scale(1, 1)"
// }

=======
>>>>>>> 6ca177345b7c309e9e2ca5e76c8bc32190f2def0
