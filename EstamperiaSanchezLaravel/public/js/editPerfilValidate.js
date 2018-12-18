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
  
