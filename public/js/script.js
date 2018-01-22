
$(document).ready(function() {

    $(document).scroll(function() {  
        var y = $(this).scrollTop();
        if (y > 400) {
          $('#scroll-to-top').fadeIn();
        } else {
          $('#scroll-to-top').fadeOut();
        }
    });

    $('#scroll-to-top').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });
});