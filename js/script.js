 /*----------------------------------------
        | Greater than the first
        ----------------------------------------*/
        $('#container1 img:gt(0)').css({'left':'600px'});
         
         /*-------------------------------------------
          | sliding
          -------------------------------------------*/
          function sliding_slide() {
          	$('#container1 img:eq(0)').delay(3000).animate({'left':'-600px'}, 1000, whenDone);
          	$('#container1 img:eq(1)').delay(3000).animate({'left': '0px'}, 1000);

          	function whenDone() {
          		$('#container1 img:eq(0)').appendTo('#container1').css({'left':'300px'});

          		sliding_slide(); //keep the party going

                }

            }

             sliding_slide(); // start the party




