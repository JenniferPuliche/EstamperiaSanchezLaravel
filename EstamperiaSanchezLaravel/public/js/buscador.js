window.onload = function(){

  var input = document.querySelector('input[name="buscar"]');

  input.addEventListener('keyup',function(){
		
    fetch('/busqueda/'+this.value)
    .then(function(response){
      return response.json();
    })
    .then(function(data){
      var lista = document.querySelector('ul#busquedas');
      data = Array.from(data);
      lista.innerHTML = "";
      data.forEach(function(product){
        lista.innerHTML += '<li class="list-group-item list-group-item-dark">'+product.name+'</li>';
      });
    })
    .catch(function(error){
      console.log(error);
    });
  });

}
