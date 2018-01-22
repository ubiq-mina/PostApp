
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

    $('#personal-info').on('submit', function(e) {
        e.preventDefault();
        console.log(JSON.stringify($(this).serializeArray()));

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            'url': 'intro/',
            'method': 'post',
            'beforeSend': console.log("Sending..."),
            'data': {'data': JSON.stringify(objectifyForm($(this).serializeArray()))},
            'complete': function(data) {
                console.log('Process complete.');
                console.log(data);
            },
            'success': function(data) {
                console.log('Yay');
                console.log(data);
            }
        })
    });
});

function objectifyForm(formArray) {
    var returnArray = {};
    for (var i = 0; i < formArray.length; i++){
      returnArray[formArray[i]['name']] = formArray[i]['value'];
    }

    return returnArray;
}