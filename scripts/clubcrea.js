let headTitle = document.querySelector('#title')
let cloneBtn = document.querySelector('#clone-btn')
let removeBtn = document.querySelector('#remove-btn')
let getItem = document.querySelector('#listitem')
let selectLi = document.querySelector('#listitem li')

// Add new item action
cloneBtn.addEventListener('click',addlistitem)
function addlistitem(){
    let i = 0
    let addList = document.getElementById("addlist")
    if (addList.value) {
        i += 1
        let getItems = document.createElement("li")
       // getItems.className = "li" + i
        let newContent = document.createTextNode(addList.value)
        getItems.appendChild(newContent)
        getItem.appendChild(getItems)
    } else {
        alert("Vous n'avez pas rentrer le nom d'un ami")
    }
}

// selectLi.addEventListener('click', (event) =>
// {
//    event.currentTarget.classList.add('active')
//    console.log('click')
// })

// getItem.addEventListener('click', (e) =>
// {
        
//             //headTitle.innerHTML = e.currentTarget.innerHTML
//             console.log(e.currentTarget.parentNode)
//             for( i=0; i < e.currentTarget.parentNode.children.length; i++ ) 
//             {
//                 e.currentTarget.parentNode.children[i].classList.remove('active')
//             }
//             e.currentTarget.classList.add('active')
        
// })

//removeBtn.add

//Change title text

getItem.addEventListener('click',triggeritem);
function triggeritem (e) {
    if(e.target.nodeName=='LI') 
    {
        // headTitle.innerHTML = e.target.innerHTML;
        // console.log(e.target.parentNode);
        for( i=0; i < e.target.parentNode.children.length; i++ ) 
        {
            e.target.parentNode.children[i].classList.remove('active');
        }
        e.target.classList.add('active')
    }
}

// Reset Value from input field
function clearValue(target){
    if (target.value != "") 
    {
        target.value= "";
    }
}

// Remove Action
removeBtn.addEventListener('click',removeItem)
function removeItem(e){
       // let removeLast = getItem.lastChild
       getItem.removeChild(document.querySelector('.active'))
       
}


