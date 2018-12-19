$moreFriend = document.querySelector('.js-add--user')

$moreFriend.addEventListener('click', () =>
{

})

function addFriend()
{

}




var headTitle = document.querySelector('#title');
var cloneBtn = document.getElementById('clone-btn');
var removeBtn = document.getElementById('remove-btn');
var getItem = document.getElementById('listitem');

// Add new item action
cloneBtn.addEventListener('click',addlistitem);
function addlistitem(){
    var addList = document.getElementById("addlist");
    if (addList.value) {
        var getItems = document.createElement("li");
        var newContent = document.createTextNode(addList.value); 
        getItems.appendChild(newContent);
        getItem.appendChild(getItems);
    } else {
        alert("Please Insert New list Item");
    }
}

// Change title text
getItem.addEventListener('click',triggeritem);
function triggeritem (e) {
    if(e.target.nodeName=='LI') {
        headTitle.innerHTML = e.target.innerHTML;
        console.log(e.target.parentNode);
        for( i=0; i < e.target.parentNode.children.length; i++ ) {
            e.target.parentNode.children[i].classList.remove('active');
        }
        e.target.classList.add('active');
    }
}

// Reset Value from input field
function clearValue(target){
    if (target.value != "") {
        target.value= "";
    }
}
// Remove Action
removeBtn.addEventListener('click',removeItem);
function removeItem(e){
        var removeLast = getItem.lastChild;
        getItem.removeChild(removeLast); 
}


