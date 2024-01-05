



const eduArrow = document.getElementById("edu-arrow")
const videoArrow = document.getElementById("video-arrow")


function toggleBtns (className){
    document.querySelector(".detail-wrap").classList.toggle(className)
    console.log(className)
}

// videoArrow.addEventListener('click', function () {
//     toggleBtns("hides")
// });
eduArrow.addEventListener('click', function(){
    toggleBtns("hide")
});