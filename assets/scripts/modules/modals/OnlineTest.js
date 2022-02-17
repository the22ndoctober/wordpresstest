const OnlineTest = ()=>{
    let btn = document.querySelectorAll('.onlineTestsMain__btnAdult')
    
    
    btn.forEach(but=>{
        but.onclick = ()=>{
            let modalContainer = document.createElement('div')
            let body = document.querySelector('body')
            let ajax = new XMLHttpRequest()
            
            ajax.open("GET", '../../public/modals/modalTest.html', false)
            ajax.send()
            modalContainer.innerHTML += ajax.responseText
            modalContainer.classList.add('signUpForMailing')
            body.insertBefore(modalContainer, body.firstChild)
    
            let btnSubscribe = document.querySelector('#signUpToCourse__subscribeBtn')
            let btnClose = document.querySelector('#signUpToCourse__closeBtn')
    
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
    })
}

OnlineTest()