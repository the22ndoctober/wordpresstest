
const activateSearch = ()=>{
    let searchContainer = document.querySelector('.navbar__options')
    let searchWrapper = document.createElement('div')
    let searchIcon = document.createElement('div')
    let searchInput = document.createElement('input')
    let searchClose = document.createElement('div')
    let animationDuration = 1000

    searchIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" id='searchIcon' class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>`

    searchIcon.classList.add('navbar__options-search')
    searchWrapper.classList.add('navbar__searchWrapper')
    searchInput.classList.add('navbar__searchInput')
    searchClose.classList.add('navbar__searchCloseBtn')

    searchInput.placeholder = 'Курси по англійській мові'
    searchClose.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
  </svg>`
    

    searchWrapper.appendChild(searchIcon)
    searchWrapper.appendChild(searchInput)
    searchWrapper.appendChild(searchClose)
    searchContainer.insertBefore(searchWrapper, searchContainer.firstChild)

    searchInput.onkeyup = e =>{
        if(e.key === 'Enter'){
            let value = searchInput.value
            let searchRequest = document.createElement('h1')

            searchRequest.innerHTML = `Ничего не найдено по запросу ${value}`
            document.location.href = '/public/sections/search.html'

            searchRequest.classList.add('title')
            searchRequest.classList.add('search__title')

            let wrapper = document.createElement('div')
            let hr = document.createElement('hr')
            
            wrapper.classList.add('search')
            wrapper.appendChild(searchRequest)
            wrapper.appendChild(hr)
            
            document.querySelector('.svitMov').appendChild(wrapper)
        }
    }

    searchClose.onclick = ()=>{
        searchWrapper.classList.add('navbar__searchWrapper-deactivate')
        setTimeout(()=>{
            searchWrapper.remove()
        },animationDuration)
    }

}

export default activateSearch