let headTitle = document.querySelector('#title')
let cloneBtn = document.getElementById('clone-btn')
let removeBtn = document.getElementById('remove-btn')
let getItem = document.getElementById('listitem')

// Add new item action
cloneBtn.addEventListener('click',addlistitem);
function addlistitem(){
    let addList = document.getElementById("addlist");
    if (addList.value) {
        let getItems = document.createElement("li");
        let newContent = document.createTextNode(addList.value); 
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
        let removeLast = getItem.lastChild;
        getItem.removeChild(removeLast); 
}


