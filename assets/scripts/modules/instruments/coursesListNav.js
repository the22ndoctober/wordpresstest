import CorporateTraning from "../modals/CorporateTraining.js"

const coursesListNav =  ()=>{
    
    let coursesListBtn = document.querySelector('#navbar__coursesListBtn')
    let navbar = document.querySelector('.navbar')

    const Drop_menu = ()=>{
        
        navbar.style.position = 'sticky'
        
        let coursesListNav = document.createElement('div')
        let modalBG = document.createElement('div')
        


        modalBG.classList.add('modalBG')
        coursesListNav.classList.add('coursesListNav')
        coursesListNav.classList.add('coursesListNav-active')
        navbar.after(coursesListNav)
        coursesListNav.after(modalBG)

        let ajax = new XMLHttpRequest()
        ajax.open("GET", '../../public/modals/coursesListMenu.html', false)
        ajax.send()
        coursesListNav.innerHTML += ajax.responseText   

        let btns = coursesListNav.querySelectorAll('button')

        btns.forEach(btn=>{
            btn.addEventListener('click', ()=>{
                document.querySelector('.coursesListNav__button-active').classList.remove('coursesListNav__button-active')
                btn.classList.add('coursesListNav__button-active')

            }) 
        })

        CorporateTraning()
        
        coursesListBtn.removeEventListener('click', Drop_menu)
        coursesListBtn.addEventListener('click',Hide_menu)
    } 

    const Hide_menu = ()=>{
        let coursesListNav = document.querySelector('.coursesListNav-active')
        let modalBG = document.querySelector('.modalBG')

        modalBG.classList.add('modalBG-deactivate')
        coursesListNav.classList.remove('coursesListNav-active')
        coursesListNav.classList.add('coursesListNav-deactivate')

        setTimeout(()=>{
            coursesListNav.remove()
            modalBG.remove()
            navbar.style.position = 'static'
        },1000)
        coursesListBtn.removeEventListener('click', Hide_menu)
        coursesListBtn.addEventListener('click', Drop_menu)
    }

    coursesListBtn.addEventListener('click', Drop_menu)
}

export default coursesListNav