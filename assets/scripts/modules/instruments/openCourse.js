const openCourse = ()=>{
    document.location.href = '/public/sections/course.html'
}

let btn = document.querySelectorAll('.searchMain__itemBtnMore')

btn.forEach(but=>{
    but.onclick = openCourse
})