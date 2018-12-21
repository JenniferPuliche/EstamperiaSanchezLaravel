 var paises = document.getElementById('paises');
 var paisSelected = document.getElementById('paisSelected').innerHTML;
 //document.getElementById('paisSelected').parentNode.removeChild('paisSelected');
 var provinciaSelected = document.getElementById('provinciaSelected').innerHTML;
 //document.getElementById('provinciaSelected').parentNode.removeChild('provinciaSelected');


   fetch('https://restcountries.eu/rest/v2/all')
        .then(function(response){
            return response.json();
        })
        .then(function(data){
            for (pais of data) { 
              if( ''+pais.name+'' == paisSelected ){
                paises.innerHTML += '<option selected="selected" value="'+pais.name+'">'+pais.name+'</option>';
              }else{
                paises.innerHTML += '<option value="'+pais.name+'">'+pais.name+'</option>';
              }
              
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
              if( ''+provincia.name+'' == provinciaSelected ){
                provincias.innerHTML += '<option selected="selected" value="'+provincia.state+'">'+provincia.state+'</option>';
              }else{
                provincias.innerHTML += '<option value="'+provincia.state+'">'+provincia.state+'</option>';
              }
          }

      })

    }
  }
  
