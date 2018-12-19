
/***
 * 
 *  remove name start 
 */

let headTitle = document.querySelector('#title')
let cloneBtn = document.querySelector('#clone-btn')
let removeBtn = document.querySelector('#remove-btn')
let getItem = document.querySelector('#listitem')
// let selectLi = document.querySelector('#listitem li')
let friendNumbers = 0
// Add new item action

let ajout = 0

cloneBtn.addEventListener('click',addlistitem)
function addlistitem(_event){
    _event.preventDefault()
    ajout += 1
    let addList = document.getElementById("addlist")
    if (addList.value) {
        let getItems = document.createElement("li")
        let newContent = document.createTextNode(addList.value)
        getItems.appendChild(newContent)
        getItem.appendChild(getItems)
        friendNumbers += 1
    } else {
        alert("Vous n'avez pas rentrer le nom d'un ami")
    }
}

//Change title text

getItem.addEventListener('click',triggeritem);
function triggeritem (e) {
    if(e.target.nodeName=='LI') 
    {
        for( i=0; i < e.target.parentNode.children.length; i++ ) 
        {
            e.target.parentNode.children[i].classList.remove('active')
        }
        e.target.classList.add('active')
    }
}

// Reset Value from input field
function clearValue(target){
    if (target.value != "") 
    {
        target.value= ""
    }
}

// Remove Action
removeBtn.addEventListener('click',removeItem)
function removeItem(_event){
    _event.preventDefault()
    getItem.removeChild(document.querySelector('.active')) 
    friendNumbers -= 1
}

/***
 * 
 *  remove name end 
 */


/***
 * 
 *  crea  start 
 */



$clubName = document.querySelector('.js-club-name')
$creaButton = document.querySelector('.js-creation-button')
$sideBarre = document.querySelector('.js-ul-side')


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
    newLi.innerHtml = $clubName.value
    newLi.innerHTML = "<a>" + $clubName.value + "</a>"
    //newLi.style.color = "#fff"
    newLi.className = "topics__mynewclub"
    $sideBarre.appendChild(newLi)
    newLi = localStorage.getItem('newLi')
    localStorage.setItem('test', 'test2')
    // console.log('c est sencé marcher')
    // alert("normalement c'est bon")
}


$creaButton.addEventListener('click', (e) =>
{
    verification()
})

 /***
 * 
 *  crea  end 
 */