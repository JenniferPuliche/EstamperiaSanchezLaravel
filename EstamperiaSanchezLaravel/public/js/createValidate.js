var Form = document.querySelector('.form-create');
var Name = document.querySelector('input[name="name"]')
var Mayorista = document.querySelector('input[name="wholesale_price"]');
var Minorista = document.querySelector('input[name="retail_price"]');
var category = document.getElementsByClassName('category').namedItem('div');

Form.onsubmit = function(){
  if(document.querySelector('input[name="categories[]"]:checked') == null){
    category.lastChild.innerText ='Debe elegir una categeoría';
  }
}


Name.onblur = function (){
    if (Name.value == "") {
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText='Ingrese un nombre válido';
    }
  }

Mayorista.onblur = function (){
    if (Mayorista.value == "" || Number(Mayorista.value) < 0 ) {
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText='Ingrese un precio válido';
    }
  }

Minorista.onblur = function (){
    if (Minorista.value == ""|| Number(Minorista.value) < 0) {
      this.classList.add("is-invalid")
      this.parentNode.querySelector('.invalid-feedback').innerText='Ingrese un precio válido';
    }
  }
