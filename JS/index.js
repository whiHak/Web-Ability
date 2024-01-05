// const sr = ScrollReveal({
//   distance: "65px",
//   duration: 2600,
//   delay: 450,
//   reset: true,
// });

// sr.reveal(".main-wrapper", { delay: 200, origin: "top" });


const registerBtn = document.querySelector('.register')
const loginBtn = document.querySelector('.login')


console.log(loginBtn)

loginBtn.addEventListener('click', (e) => {
  e.preventDefault();
  location.href = "Home.html"
})

