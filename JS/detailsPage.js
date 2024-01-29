



const eduArrow = document.getElementById("edu-arrow")
const videoArrow = document.getElementById("video-arrow")


function toggleBtns (classNames, className){
    document.querySelector(classNames).classList.toggle(className);
    console.log(classNames);
}

videoArrow.addEventListener('click', function () {
    toggleBtns(".detail-wraps","hide");
});
eduArrow.addEventListener('click', function(){
    toggleBtns(".detail-wrap", "hide");
});

const ebtn = document.querySelectorAll('#v-btn')

let menu = document.querySelector('#menu-icon');
let sidebar = document.querySelector('.side-bar');

menu.onclick = () => {
    sidebar.classList.toggle('open');
    menu.classList.toggle('bx-x');
}

