window.onload = function(){

  var input = document.querySelector('input[name="buscar"]');

  input.addEventListener('keyup',function(){
		
    fetch('/search/'+this.value)
    .then(function(response){
      console.log(response.clone().json());
      return response.clone().json();
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
