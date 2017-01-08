(function($) {

    console.log(local);

    const body_ele = $('body');
    body_ele.css( "background-image", "url( " + local.company_bg_image + " ) " );
    body_ele.css( "background-repeat", "no-repeat" );
    body_ele.css( "background-position", "top center" );

    function getOutput() {
       $.ajax({

          url:'00myAjax.php',
          data:'functionName=myAjax',
          complete: function (response) {
              console.log("ajax completed");
              console.log(response);
          },
          error: function () {
              console.log('Bummer: there was an error!');
          }
      });

      return false;
    }

    //getOutput();

    //console.log(getOutput());






    /*$.ajax({
        url : wpadmin.adminAjax,
        data : {
            action: 'action_name'
        },
        success: function(response) {
            console.log('---------------------------');
            console.log(response);
        }
    });*/



})(jQuery);


/*
jQuery(document).ready( function($) {

    $.ajax({
        url: "0myAjax.php",
        success: function( data ) {
            alert( 'Your home page has ' + $(data).find('div').length + ' div elements.');
        }
    });

});
*/
