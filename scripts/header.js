$clubName = document.querySelector('.js-club-name')
$creaButton = document.querySelector('.js-creation-button')
$sideBarre = document.querySelector('.js-ul-side')

console.log($creaButton)

function verification()
{
    if($clubName.value)
    {
        verificationFriend()
        creaClub()
    }
    else
    {
        alert("Vous n'avez pas rentré le nom du club")
    }
}
function verificationFriend()
{
    if (friendNumbers <= 0) {
        alert("Vous n'avez pas ajouté d'amis")
    }
}
function recupData()
{
    console.log($clubName.value)
}
function creaClub()
{
    let newLi = document.createElement('li')
    // newLi.createElement('a')
    // newLi.innerHtml = $clubName.value
    newLi.innerHTML = "<a>" + $clubName.value + "</a>"
    newLi.style.color = "#fff"
    newLi.className = "topics__mynewclub"
    $sideBarre.appendChild(newLi)
    console.log('c est sencé marcher')
    alert("normalement c'est bon")
}


// $creaButton.addEventListener('click', (e) =>
// {
//     verification()
// })