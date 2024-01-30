let check1=false,check2=false,check3=false,check4=false,check5=false,check6=false;
const signup = document.getElementById('button');


 function validate(){
  if (check1 && check2 && check3 && check4 && check5 && check6)
  signup.disabled = false;
  else
  signup.disabled = true;
 }


function error(id, isValid, message) {

  if (id == 'name_input') {
    if (!isValid) {
      let errorElement = document.getElementById('name-error');
      errorElement.textContent = message;
      errorElement.style.display = 'block';
      fullName.style.borderBottom = 'solid 1px red';

    }
    else {
      let errorElement = document.getElementById('name-error');
      errorElement.textContent = '';
      errorElement.style.display = 'none';
      fullName.style.borderBottom = 'solid 1px green';
    }
  }

  if (id == 'email_input') {
    if (!isValid) {
      let errorElement = document.getElementById('email-error');
      errorElement.textContent = message;
      errorElement.style.display = 'block';
      emailInput.style.borderBottom = 'solid 1px red';

    }
    else {
      let errorElement = document.getElementById('email-error');
      errorElement.textContent = '';
      errorElement.style.display = 'none';
      emailInput.style.borderBottom = 'solid 1px green';
    }
  }

  if (id == 'password_input') {
    if (!isValid) {
      let errorElement = document.getElementById('error-password');
      errorElement.textContent = message;
      errorElement.style.display = 'block';
      passwordInput.style.borderBottom = 'solid 1px red';

    }
    else {
      let errorElement = document.getElementById('error-password');
      errorElement.textContent = '';
      errorElement.style.display = 'none';
      passwordInput.style.borderBottom = 'solid 1px green';
    }

  }

  if (id == 'confirm_input') {
    if (!isValid) {
      let errorElement = document.getElementById('confirm-error');
      errorElement.textContent = message;
      errorElement.style.display = 'block';
      confrimPassword.style.borderBottom = 'solid 1px red';
    }
    else {
      let errorElement = document.getElementById('confirm-error');
      errorElement.textContent = '';
      errorElement.style.display = 'none';
      confrimPassword.style.borderBottom = 'solid 1px green';
    }

  }

  if (id == 'phone') {
    if (!isValid) {
      let errorElement = document.getElementById('phone-error');
      errorElement.textContent = message;
      errorElement.style.display = 'block';
      phoneNumber.style.borderBottom = 'solid 1px red';
    }
    else {
      let errorElement = document.getElementById('phone-error');
      errorElement.textContent = '';
      errorElement.style.display = 'none';
      phoneNumber.style.borderBottom = 'solid 1px green';
    }

  }
  if (id == 'telegram_input') {
    if (!isValid) {
      let errorElement = document.getElementById('telegram-error');
      errorElement.textContent = message;
      errorElement.style.display = 'block';
      telegram.style.borderBottom = 'solid 1px red';
    }
    else {
      let errorElement = document.getElementById('telegram-error');
      errorElement.textContent = '';
      errorElement.style.display = 'none';
      telegram.style.borderBottom = 'solid 1px green';
    }
  }

}

let fullName = document.getElementById('name_input');
fullName.addEventListener('input', function () {
  if (fullNameCheck()==true);
  check1=true;
  validate()

})
let emailInput = document.getElementById('email_input');
emailInput.addEventListener('input', function () {
  if (emailCheck()==true);
  check2=true;
  validate()
 

})

let passwordInput = document.getElementById('password_input');
passwordInput.addEventListener('input', function () {
  if (passwordCheck()==true);
  check3=true;
  validate()
  

})

let confrimPassword = document.getElementById('confirm_input');
confrimPassword.addEventListener('input', function () {
  if (confrimPasswordCheck()==true);
  check4=true;
  validate()

  

})

let phoneNumber = document.getElementById('phone');
phoneNumber.addEventListener('input', function () {
  if (phoneN()==true);
  check5=true;
  validate()
  

})
let telegram = document.getElementById('telegram_input');
telegram.addEventListener('input', function () {
  if (telegramCheck()==true);
  check6=true;
  validate()


})

function fullNameCheck() {
  const fName = document.getElementById('name_input').value.trim();
  var isValid = /^[a-zA-Z\s]{3,20}$/.test(fName);
  error('name_input', isValid, "Characters Only. with 3-20 characters length.")
  return isValid;

}
function emailCheck() {
  const email = document.getElementById('email_input').value;
  var isValid = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email);
  error('email_input', isValid, "Invalid email format.")
  return isValid;

}
function passwordCheck() {
  const password = document.getElementById('password_input').value;
  var isValid = password.length >= 8;
  error('password_input', isValid, "Password should be at least 8 characters.")
  return isValid;


}
function confrimPasswordCheck() {
  const password = document.getElementById('password_input').value;
  const cPassword = document.getElementById('confirm_input').value;
  var isValid = password === cPassword;
  error('confirm_input', isValid, "Passwords do not match.")
  return isValid;
}
function phoneN() {
  const phone = document.getElementById('phone').value;
  var isValid = /(\+\s*2\s*5\s*1\s*9\s*(([0-9]\s*){8}\s*))|(0\s*9\s*(([0-9]\s*){8}))/.test(phone);
  error('phone', isValid, "Invalid Phone number format.")
  return isValid;

}
function telegramCheck() {
  const telegram = document.getElementById('telegram_input').value.trim();
  var isValid = /^@?[A-Za-z0-9_]{5,32}$/.test(telegram);
  error('telegram_input', isValid, "Invalid Telegram")
  return isValid;
}
