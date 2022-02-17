let items = document.querySelectorAll('.teachers__card')
let itemSrc
let itemName
let itemText

console.log(items)

items.forEach((item,id)=>{
    item.onclick = ()=>{
        itemSrc = item.querySelector('img').src
        itemName = item.querySelector('h3').innerHTML
        itemText = item.querySelector('p').innerHTML
        
        let mainContainer = document.querySelector('.svitMov')
        
        while(mainContainer.children.length > 1){

            mainContainer.lastChild.remove()
            

        }

        let container = document.createElement('sections')
        container.classList.add('teachersItem')

        let ajax = new XMLHttpRequest();
        ajax.open("GET", '../../../public/sections/items/teachersItem.html', false);
        ajax.send();
        container.innerHTML += ajax.responseText;

        // container.querySelector('.teachersItem__photo').src = itemSrc
        container.querySelector('#teachersItem__name').innerHTML = itemName
        container.querySelector('.teachersItem__subtitle').innerHTML = itemText

        mainContainer.appendChild(container)
    }
})