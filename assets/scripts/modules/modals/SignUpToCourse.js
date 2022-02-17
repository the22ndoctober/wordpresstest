const SignUpToCourse = ()=>{
    if(document.querySelector('#mainContent__signUpCourseBtn')){

        let btn = document.querySelector('#mainContent__signUpCourseBtn')
        
        
        btn.onclick = ()=>{
            let modalContainer = document.createElement('div')
            let body = document.querySelector('body')
            let ajax = new XMLHttpRequest()
            
            ajax.open("GET", '../../public/modals/modalSignUpToCourse.html', false)
            ajax.send()
            modalContainer.innerHTML += ajax.responseText
            modalContainer.classList.add('signUpToCourse')
            body.insertBefore(modalContainer, body.firstChild)
    
            //****************** TYPE SWITCH **********************************//
    
            let childBtn = document.querySelector('#signUpToCourse__btnForChild')
            let adultBtn = document.querySelector('#signUpToCourse__btnForAdult')
            let inputBirth = document.querySelector('#signUpToCourse__formBirthdate')
            let inputParent = document.querySelector('#signUpToCourse__formParentName')
    
            const ChildSwitch = ()=>{
                childBtn.classList.add('btn-text-transparent-active')
                adultBtn.classList.remove('btn-text-transparent-active')
                inputBirth.style.display = 'block'
                inputParent.style.display = 'block'
                childBtn.removeEventListener('click', ChildSwitch)
                adultBtn.addEventListener('click', AdultSwitch)
            }
            const AdultSwitch = ()=>{
                adultBtn.classList.add('btn-text-transparent-active')
                childBtn.classList.remove('btn-text-transparent-active')
                inputBirth.style.display = 'none'
                inputParent.style.display = 'none'
                adultBtn.removeEventListener('click', AdultSwitch)
                childBtn.addEventListener('click', ChildSwitch)
            }
    
            childBtn.addEventListener('click', ChildSwitch)
    
            //***************************************************************//
    
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
    }
}

export default SignUpToCourse