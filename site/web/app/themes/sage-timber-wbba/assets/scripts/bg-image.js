(function($) {

    console.log( 'bg-image.js' );
    console.log(local.foobar);
    console.log(local.bg_image);

    $('body').css( "background-image", "url( " + local.bg_image + " ) " );
    $('body').css( "background-repeat", "no-repeat" );
    $('body').css( "background-position", "top center" );

    //var function getOutput() {
      /* $.ajax({

          url:'0myAjax.php',
          data:'functionName=myAjax',
          complete: function (response) {
              console.log("ajax completed");
              console.log(response.responseText);
          },
          error: function () {
              console.log('Bummer: there was an error!');
          }
      });*/

      //return false;
    //}


})(jQuery);