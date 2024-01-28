const reg = document.querySelector('.register')
reg.disabled = true;

function error(id, isValid, message){

    if(id=='name_input'){
      if(!isValid){
        let errorElement = document.getElementById('name-error');
        errorElement.textContent=message;
        errorElement.style.display='block';
        fullName.style.borderBottom='solid 1px red';
      }
      else{
        let errorElement = document.getElementById('name-error');
        errorElement.textContent ='';
        errorElement.style.display='none';
        fullName.style.borderBottom='solid 1px green';
      }
    }
  
    if(id=='email_input'){
      if(!isValid){
        let errorElement = document.getElementById('email-error');
        errorElement.textContent=message;
        errorElement.style.display='block';
        emailInput.style.borderBottom='solid 1px red';
      
      }
      else{
        let errorElement = document.getElementById('email-error');
        errorElement.textContent ='';
        errorElement.style.display='none';
        emailInput.style.borderBottom='solid 1px green';
      }
    }
  
    if(id=='password_input'){
      if(!isValid){
        let errorElement = document.getElementById('error-password');
        errorElement.textContent = message;
        errorElement.style.display='block';
        passwordInput.style.borderBottom='solid 1px red';
  
      }
      else{
        let errorElement = document.getElementById('error-password');
        errorElement.textContent ='';
        errorElement.style.display='none';
        passwordInput.style.borderBottom='solid 1px green';
      }
  
    }
  
    if(id=='confirm_input'){
      if(!isValid){
        let errorElement = document.getElementById('confirm-error');
        errorElement.textContent=message; 
        errorElement.style.display='block';
        confrimPassword .style.borderBottom='solid 1px red';
      }
      else{
        let errorElement = document.getElementById('confirm-error');
        errorElement.textContent ='';
        errorElement.style.display='none';
        confrimPassword .style.borderBottom='solid 1px green';
      }
     
    }
  
    if(id=='phone'){
      if(!isValid){
        let errorElement = document.getElementById('phone-error');
        errorElement.textContent=message;
        errorElement.style.display='block';
        phoneNumber.style.borderBottom='solid 1px red';
      }
      else{
        let errorElement = document.getElementById('phone-error');
        errorElement.textContent ='';
        errorElement.style.display='none';
        phoneNumber.style.borderBottom='solid 1px green';
      }
     
    }
    if(id=='telegram_input'){
      if(!isValid){
        let errorElement = document.getElementById('telegram-error');
        errorElement.textContent=message;
        errorElement.style.display='block';
        telegram.style.borderBottom='solid 1px red';
      }
      else{
        let errorElement = document.getElementById('telegram-error');
        errorElement.textContent ='';
        errorElement.style.display='none';
        telegram.style.borderBottom='solid 1px green';
      }
    }
  
  }
  
  let fullName = document.getElementById('name_input');
  fullName.addEventListener('input', function(){
    fullNameCheck();
  
  })
  let emailInput = document.getElementById('email_input');
  emailInput.addEventListener('input', function(){
    emailCheck();
    
  })
  
  let passwordInput = document.getElementById('password_input');
  passwordInput.addEventListener('input', function(){
    passwordCheck();
    
  })
  
  let confrimPassword = document.getElementById('confirm_input');
  confrimPassword.addEventListener('input', function(){
    confrimPasswordCheck()
    
  })
  
  let phoneNumber = document.getElementById('phone');
  phoneNumber.addEventListener('input', function(){
    phoneN();
    
  })
  let telegram = document.getElementById('telegram_input');
  telegram.addEventListener('input', function(){
    telegramCheck();
    
  })
  
  function fullNameCheck(){
    const fName = document.getElementById('name_input').value.trim();
    var isValid = /^[a-zA-Z\s]{3,20}$/.test(fName);
    error('name_input', isValid, "Characters Only. with 3-20 characters length." )
  
  }
  function emailCheck(){
    const email = document.getElementById('email_input').value;
    var isValid = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email);
    error('email_input', isValid, "Invalid email format." )
  
  }
  function passwordCheck(){
    const password = document.getElementById('password_input').value;
    var isValid = password.length >= 8;
    error('password_input', isValid, "Password should be at least 8 characters." )
  
  
  }
  function confrimPasswordCheck(){
    const password = document.getElementById('password_input').value;
    const cPassword = document.getElementById('confirm_input').value;
    var isValid = password === cPassword;
    error('confirm_input', isValid,"Passwords do not match." )
  }
  function phoneN(){
    const phone = document.getElementById('phone').value;
    var isValid = /(\+\s*2\s*5\s*1\s*9\s*(([0-9]\s*){8}\s*))|(0\s*9\s*(([0-9]\s*){8}))/.test(phone);
    error('phone', isValid, "Invalid Phone number format." )
  
  }
  function telegramCheck(){
    const telegram = document.getElementById('telegram_input').value.trim();
    var isValid = /^@?[A-Za-z0-9_]{5,32}$/.test(telegram);
    error('telegram_input', isValid, "Invalid Telegram" )
  
  }