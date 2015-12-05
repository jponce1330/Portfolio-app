$(document).ready(function(){

/*-------------------------------------
| menu nav funcation
-------------------------------------*/
        $(function() {
          var pull    = $('#pull');
              menu    = $('nav ul');
              menuheight  = menu.height();

          $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
          });
        });

        $(window).resize(function() {
          var w = $(window).width();
          if(w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
          }

        }); 
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



/*-------------------------------------
| type
-------------------------------------*/
function mycntrl() {
$('#cntrl .slides img:gt()').css({'left':'300px'});

/*-----------------------------------------
 | Keep track of its animating
 ---------------------------------------*/
var moving = 'no';

/*---------------------------------------
| Left Button
-------------------------------------*/
function left_click() {
  if (moving == 'no')
  {
    moving = 'yes';

    $('#cntrl .slides img:eq(0)').css({'left':'0px'}).animate({'left':'-600px'}, 1000, whenDone);
    $('#cntrl .slides img:eq(1)').css({'left':'600px'}).animate({'left':'0px'}, 1000);
    
    function whenDone() {
      $('#cntrl .slides img:eq(0)').appendTo('#cntrl .slides');
      moving = 'no';
    }
  
  }
}

$('#cntrl .buttons .left').click(left_click);
/*-----------------------------------------------
 | Right Button
 -----------------------------------------------*/
function right_click() {
  if (moving == 'no')
  {
    moving = 'yes';
    function whenDone() {
      $('#cntrl .slides img:last').prependTo('#cntrl .slides');
      moving = 'no';
    }

    $('#cntrl .slides img:eq(0)').css({'left':'-600px'}).animate({'left':'0px'}, 1000, whenDone);
    $('#cntrl .slides img:last').css({'left':'0px'}).animate({'left':'600px'}, 1000);
  
  }
}

$('#cntrl .buttons .right').click(right_click);


}

mycntrl();


}); /*here ends doc ready*/



