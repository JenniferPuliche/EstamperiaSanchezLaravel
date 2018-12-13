window.addEventListener('load', function(){


var loginForms = document.querySelector('#loginForm');

loginForms.onsubmit = function(event){
  var inputEmail = document.querySelector('input[name="email"]')
  if (inputEmail.value=''){
    inputEmail.classList.add('is-invalid');
    event.preventDefault();
  }
}
};
