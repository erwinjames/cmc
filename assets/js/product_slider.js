$(document).ready(function(){
    var totalWidth = 0;
    var positions = [];

    $('#product_slides .content_slide').each( function(i) {
        positions[i] = totalWidth;
        totalWidth += $(this).width();

        if( !$(this).width() ) {
            alert('Please make sure all images have widths!');
            return false;
        }
    });

    $('#product_slides').width(totalWidth);

    $('#slider_menu ul li a').click( function(e, keepScroll) {

        $('li.product').removeClass('active').addClass('inactive');

        $(this).parent().addClass('active');
        
        var pos = $(this).parent().prevAll('.product').length;
        
        $('#product_slides').stop().animate({marginLeft:-positions[pos] + 'px'}, 450);

        e.preventDefault();

        if(!autoScroll) {
            clearInterval(itvl);
        }   
    });

    $('.product').first().addClass('active').siblings().addClass('inactive');

    var current = 1;
    
    function autoScroll() {
        if (current == -1) {
            return false;
        }
        
        $( '#slider_menu ul li a' ).eq( current % $('#slider_menu ul li a').length ).trigger('click', true);
        current++;
    }

    var duration = 5;
    var itvl = setInterval( function() {
        autoScroll();
    }, duration * 1000);
    
});