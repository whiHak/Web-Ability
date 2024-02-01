



const contentDiv = document.querySelectorAll(".cont-wrapper")
// const OtherDiv = document.querySelector(".detail-wraps")


function toggleBtns (classNames, className){
    console.log(classNames)
    const a = document.querySelector(classNames).classList.toggle(className);
    console.log(a);
}

contentDiv.forEach((div)=>{
    div.addEventListener('click', function(){
        console.log(this.id)
            toggleBtns(this.id =="first-div" ? ".detail-wrap":".detail-wraps", "hide");
        });
})

let menu = document.querySelector('#menu-icon');
let sidebar = document.querySelector('.side-bar');

menu.onclick = () => {
    sidebar.classList.toggle('open');
    menu.classList.toggle('bx-x');
}

