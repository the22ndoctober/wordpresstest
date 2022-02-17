const SignUpForMailing = ()=>{
    let btn = document.querySelector('#footer__signUpForMailingBtn')
    // mainContent__signUpCourseBtn
    
    btn.onclick = ()=>{
        let modalContainer = document.createElement('div')
        let body = document.querySelector('body')
        let ajax = new XMLHttpRequest()
        
        ajax.open("GET", '../../public/modals/modalSignUpForMailing.html', false)
        ajax.send()
        modalContainer.innerHTML += ajax.responseText
        modalContainer.classList.add('signUpForMailing')
        body.insertBefore(modalContainer, body.firstChild)

        let btnSubscribe = document.querySelector('#signUpForMailing__subscribeBtn')
        let btnClose = document.querySelector('#signUpForMailing__closeBtn')

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

export default SignUpForMailing