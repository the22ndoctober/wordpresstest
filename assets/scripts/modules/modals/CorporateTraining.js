const CorporateTraning = ()=>{
    let btn = document.querySelector('#coursesListNav__corporateTraining')
    
    btn.onclick = ()=>{
        let container = document.querySelector('.coursesListNav__links')
        let btnModal = document.createElement('a')
        let btnLink = document.createElement('a')

        btnModal.classList.add('coursesListNav__linksItem')
        btnLink.classList.add('coursesListNav__linksItem')
        btnModal.innerHTML = 'Записатися на корпоративне навчання'
        btnLink.innerHTML = 'Детальніше про корпоративне навчання'
        btnLink.href = '../../public/sections/corporateTraining.html'

        while(container.firstChild){
            container.lastChild.remove()
        }

        container.appendChild(btnLink)
        container.appendChild(btnModal)

        btnModal.onclick = ()=>{
            let modalContainer = document.createElement('div')
            let body = document.querySelector('body')
            let ajax = new XMLHttpRequest()
            
            ajax.open("GET", '../../public/modals/modalCorporateTraining.html', false)
            ajax.send()
            modalContainer.innerHTML += ajax.responseText
            modalContainer.classList.add('corporateTraining')
            body.insertBefore(modalContainer, body.firstChild)
    
            let btnSubscribe = document.querySelector('#corporateTraining__subscribeBtn')
            let btnClose = document.querySelector('#corporateTraining__closeBtn')
    
            const CloseModal = ()=>{
                modalContainer.classList.add('modal-close')
                setTimeout(()=>{
                    modalContainer.remove()
                },1000)
            }
    
            btnSubscribe.onclick = ()=>{
                alert('You have been subsribed!')
                CloseModal()
            }
    
            btnClose.onclick = CloseModal
        }
    }
    
    
}

export default CorporateTraning