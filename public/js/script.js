
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

    // $('#personal-info').on('submit', function(e) {
    //     e.preventDefault();
    //     console.log(JSON.stringify(objectifyForm($(this).serializeArray())));

    //     // $('.alert-danger').remove();

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
        
    //     $.ajax({
    //         'url': 'intro/',
    //         'method': 'post',
    //         'beforeSend': console.log("Sending..."),
    //         // AJAX version
    //         // 'data': {
    //         //     'data': JSON.stringify(objectifyForm($(this).serializeArray()))
    //         // },
    //         'data': $(this).serialize(), // Imitates the way the form data will be submitted when not AJAX
    //         'complete': function(data) {
    //             // console.log('Process complete.');
    //             // console.log(data);
    //         },
    //         'success': function(data) {
    //             console.log('Yay');
    //             console.log(data);
    //         },
    //         'error': function(data) {
    //             if (data['status'] == '422') { // If the form has validation errors
    //                 var errors = data.responseJSON['errors'];
    //                 // console.log(errors);

    //                 for (var e in errors) {
    //                     if (errors.hasOwnProperty(e)) {
    //                         // console.log(e + ': ' + errors[e]);
    //                         var errorText = '<div class="alert alert-danger">' + errors[e] + '</div>'

    //                         var errorElement = $('label[for=' + e + ']').next();
    //                         console.log(errorElement);

    //                         if (!errorElement.hasClass('alert-danger')) {
    //                             errorElement = 'label[for=' + e + ']';
    //                             $(errorElement).after(errorText);
    //                         }
    //                         else {
    //                             $(errorElement).text(errors[e]);
    //                         }

    //                     }
    //                 }
    //             }
    //         }
    //     })
    // });
});

function objectifyForm(formArray) {
    var returnArray = {};
    for (var i = 0; i < formArray.length; i++){
      returnArray[formArray[i]['name']] = formArray[i]['value'];
    }

    return returnArray;
}