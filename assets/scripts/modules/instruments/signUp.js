let btnForChild = document.querySelector('#login__btnForChild')
let btnForAdult = document.querySelector('#login__btnForAdult')
let signUpContainer = document.querySelector('.login__signUp')
let signInContainer = document.querySelector('.login__signIn')
let signUpBtn = document.querySelector('#login__signUpBtn')
let btnLogin = document.querySelector('#login__btnLogin')

signUpBtn.onclick = ()=>{
  signUpContainer.style.left = '0'
  signInContainer.style.left = '-420px'
}

btnLogin.onclick = ()=>{
  signUpContainer.style.left = '420px'
  signInContainer.style.left = '0'
}

btnForChild.onclick = ()=>{

}
btnForAdult.onclick = ()=>{
  
}