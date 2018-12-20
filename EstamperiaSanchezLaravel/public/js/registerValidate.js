window.addEventListener('load', function(){

  var theForm = document.querySelector('.contact-form');
  var elementsOfForm = theForm.elements;
  var elementsInArray = Array.from(elementsOfForm)
  elementsInArray.pop();
  var inputName = document.querySelector('input[name="name"]');
  var inputEmail = document.querySelector('input[name="email"]');
  var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  var inputPhone = document.querySelector('input[name="userPhone"]');
  var phoneRegex = /^[0-9\-\+]{9,15}$/;
  var inputPass = document.querySelector('input[name="password"]');
  var passRegex = /^(?=.*\d).{4,20}$/;
  var inputRePass = document.querySelector('input[name="password_confirmation"]');
  var inputGender = document.querySelector('input[name="userGender"]')


  inputName.onblur = function (){
    if (inputName.value == "") {
      // var errorEmail = document.createElement('span');
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText = 'Ingrese un nombre válido';
      // errorEmail.appendChild(text);
      // inputEmail.parentElement.innerText(errorEmail);
    }
  }

  inputEmail.onblur = function (){
    if (!emailRegex.test(this.value)) {
      // var errorEmail = document.createElement('span');
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText = 'Ingrese un Email válido';
      // errorEmail.appendChild(text);
      // inputEmail.parentElement.innerText(errorEmail);
    }
  }

  inputPhone.onblur = function (){
    // console.log(inputPhone.value)
    if (!phoneRegex.test(this.value)) {
      // var errorPhone = document.createElement('span');
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText = 'Ingrese un teléfono válido';
      // errorPhone.appendChild(text);
      // inputPhone.parentElement.appendChild(errorPhone);
    }
  }

  inputPass.onblur = function(){
    if (!passRegex.test(this.value)){
      // var errorPassLength = document.createElement('span');
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText = 'Ingrese una contraseña válida';
          // errorPassLength.appendChild(text);
      // inputPass.parentElement.appendChild(errorPassLength);
      // console.log(inputPass.length)
    }
  }
  inputRePass.onblur = function (){
    if (inputRePass.value !== inputPass.value) {
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText = 'La contraseñas no son iguales';
      // var errorRePassLength = document.createElement('span');
      // var text = document.createTextNode('La contraseñas no son iguales');
      // errorRePassLength.appendChild(text);
      // inputRePass.parentElement.appendChild(errorRePassLength);
      // console.log(inputPass.length)
    }
  }

  var paises = document.getElementById('paises');

   fetch('https://restcountries.eu/rest/v2/all')
        .then(function(response){
            return response.json();
        })
        .then(function(data){
            for (pais of data) { 
              paises.innerHTML += '<option value="'+pais.name+'">'+pais.name+'</option>';
            }

            
        })

  paises.onchange = function(){

    if (this.value == 'Argentina') {
      document.getElementById('prov').style.display = 'block';
      var provincias = document.getElementById('provincias');


      fetch('https://dev.digitalhouse.com/api/getProvincias')
      .then(function(response){
          return response.json();
      })
      .then(function(data){
          for (provincia of data) { 
            provincias.innerHTML += '<option value="'+provincia.state+'">'+provincia.state+'</option>';

          }

      })

    }
  }
  

      })


    




    
 