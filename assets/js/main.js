(function($) {

    var $window = $(window),
        $body = $('body');

    // Breakpoints.
    breakpoints({
        wide: ['1281px', '1680px'],
        normal: ['981px', '1280px'],
        narrow: ['841px', '980px'],
        narrower: ['737px', '840px'],
        mobile: ['481px', '736px'],
        mobilep: [null, '480px']
    });

    // Play initial animations on page load.
    $window.on('load', function() {
        window.setTimeout(function() {
            $body.removeClass('is-preload');
        }, 100);
    });

    // Dropdowns.
    $('#nav > ul').dropotron({
        offsetY: -15,
        hoverDelay: 0,
        alignment: 'center'
    });

    // Nav.

    // Bar.
    $(
            '<div id="titleBar">' +
            '<a href="#navPanel" class="toggle"></a>' +
            '<span class="title">' + '<h1>Cordova Multipurpose Cooperative</h1>' + '</span>' +
            '</div>'
        )
        .appendTo($body);

    // Panel.
    $(


            '<div id="navPanel">' +
            '<nav>' +
            $('#nav').navList() +
            '</nav>' +
            '</div>'
        )
        .appendTo($body)
        .panel({
            delay: 500,
            hideOnClick: true,
            hideOnSwipe: true,
            resetScroll: true,
            resetForms: true,
            side: 'left',
            target: $body,
            visibleClass: 'navPanel-visible'
        });

})(jQuery);

$("#slideshows > img:gt(0)").hide();

setInterval(function() { 
  $('#slideshows > img:first')
    .fadeOut(3000)
    .next()
    .fadeIn(3000)
    .end()
    .appendTo('#slideshows');
},  5000);

$( document ).ready(function() {
   
	var timerId=setInterval(function() { 
	
		$('h3.whr-title').each(function() {
			
		  var href=$(this).children().first().attr('href');
		  		  
		  var new_content=$(this).parent().html() + "<div class='apply-now-btn'><a href='"+ href +"' target='_blank'>Apply Now</a></div>";
		  
		  $(this).parent().html(new_content) ;
		  
		  clearInterval(timerId);
		});
		
	},  1000);
});

$(document).ready(function() {
    $("#toggle").click(function() {
      var elem = $("#toggle").text();
      if (elem == "Read More") {
        $("#toggle").text("Read Less");
        $("#text").slideDown();
      } else {
      
        $("#toggle").text("Read More");
        $("#text").slideUp();
      }
    });
  });

  $('.modal-toggle').on('click', function(e) {
    e.preventDefault();
    $('.modal').toggleClass('is-visible');
  });
  
  