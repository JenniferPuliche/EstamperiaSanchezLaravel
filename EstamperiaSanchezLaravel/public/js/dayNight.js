    $(document).ready(function(){

      // console.log(localStorage.getItem('mode'))

      if(localStorage.getItem("mode")=="light"){
        $('#ccs_body')[0].href='css/body.css';
        // $('#navBar').toggleClass('bg-light')

      }else{
        $('#ccs_body')[0].href='css/dark.css';
        // $('#navBar').toggleClass('bg-dark')
        $('.toggle').toggleClass('active');
      }



      // if(localStorage.getItem("mode")=="dark"){
      //   $('#ccs_body')[0].href='css/dark.css';
      //   $('.toggle').toggleClass('active')
      // }else{
      //   $('#ccs_body')[0].href='css/body.css';
      // }
      //
      //
      //

        $('.toggle').click(function(){
          //console.log($('#ccs_body')[0])
          if(localStorage.getItem("mode")=="dark"){
            $('#ccs_body')[0].href='css/body.css';
            // $('#navBar').toggleClass('bg-light')
            localStorage.setItem("mode", "light");
          }else{
            $('#ccs_body')[0].href='css/dark.css';
            // $('#navBar').toggleClass('bg-dark')
            localStorage.setItem("mode", "dark");
          }

          $('.toggle').toggleClass('active')
            // $('body').toggleClass('night')
            // $('body').toggleClass('dark-mode')
            // $('#navBar').toggleClass('bg-dark')
            // $('footer').toggleClass('bg-dark')
            // $('body').toggleClass('text-white')
            // darkmode();
            // console.log(localStorage.getItem('mode'));
        })
    })
