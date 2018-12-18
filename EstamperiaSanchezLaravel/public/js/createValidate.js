var Form = document.querySelector('.form-create');
var Name = document.querySelector('input[name="name"]')
var Mayorista = document.querySelector('input[name="wholesale_price"]');
var Minorista = document.querySelector('input[name="retail_price"]');

Name.onblur = function (){
    if (Name.value == "") {
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText='Ingrese un nombre válido';
    }
  }

Mayorista.onblur = function (){
    if (Mayorista.value == "") {
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText='Ingrese un precio válido';
    }
  }

Minorista.onblur = function (){
    if (Minorista.value == "") {
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText='Ingrese un precio válido';
    }
  }







