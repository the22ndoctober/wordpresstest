//*****************IMPORTS***********************//
import SignUpForMailing from './modules/modals/SignUpForMailing.js'
import activateSearch from './modules/instruments/searchNav.js'
import coursesListNav from './modules/instruments/coursesListNav.js'
import SignUpToCourse from './modules/modals/SignUpToCourse.js'

//***********************************************//
coursesListNav()
SignUpForMailing()
SignUpToCourse()


let searchBtn = document.querySelector('#navbar__search')
searchBtn.addEventListener('click', activateSearch)

//************************************************************************************* */



  