
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
cloneBtn.addEventListener('click',addlistitem)
function addlistitem(){
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
function removeItem(e){
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



function verification()
{
    if($clubName.value)
    {
        console.log($clubName.value)
        verificationFriend()
    }
    else
    {
        alert("Vous n'avez pas rentrer le nom du club")
    }
}

function verificationFriend()
{
    if (friendNumbers <= 0) {
        alert("Vous n'avez pas ajouter d'amis")
    }
}

$creaButton.addEventListener('click', () =>
{
    verification()
})

 /***
 * 
 *  crea  end 
 */