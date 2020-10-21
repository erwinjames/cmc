(function($) {

    $('[data-popup-open]').on('click', function(e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);


        e.preventDefault();
    });


    $('[data-popup-close]').on('click', function(e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

        e.preventDefault();
    });

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
}, 5000);

$(document).ready(function() {

    var timerId = setInterval(function() {

        $('h3.whr-title').each(function() {

            var href = $(this).children().first().attr('href');

            var new_content = $(this).parent().html() + "<div class='apply-now-btn'><a href='" + href + "' target='_blank'>Apply Now</a></div>";

            $(this).parent().html(new_content);

            clearInterval(timerId);
        });

    }, 1000);


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


var coll = document.getElementsByClassName("colapse");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}
$('.list-reset li').on('click', function() {
    $('.list-reset li').removeClass('active')
    $(this).addClass('active')
})

function getInputValue() {
    var word = document.getElementById("search5").value,
        queue = [document.body],
        curr;
    if (word=='') {
        alert('cant read search');
    } else {
    while (curr = queue.pop()) {
        if (!curr.textContent.match(word))continue;
        for (var i = 0; i < curr.childNodes.length; ++i) {
            switch (curr.childNodes[i].nodeType) {
                case Node.TEXT_NODE:
                    if (curr.childNodes[i].textContent.match(word)) {
                        curr.scrollIntoView(true);
                        curr.style.backgroundColor = "yellow";
                        curr.style.fontWeight = "bold";
                    }
                    break;
                case Node.ELEMENT_NODE:
                    queue.push(curr.childNodes[i]);
                    break;
            }
        }
    }
  }
}