window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

if(document.getElementById('carousel')){
    $(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            nav: true,

        });

        $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
        $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
     })
}

$( "#frm-contact" ).submit(function( event ) {
    event.preventDefault();
    sendContact();
});

function sendContact() {

    let myForm   = document.getElementById('frm-contact');
    let formData = new FormData(myForm);
    var Swal     = require('sweetalert2');

    var error_title = $('#error-title').val();
    var error_description = $('#error-description').val();

    var ok_title = $('#ok-title').val();
    var ok_description = $('#ok-description').val();

    $('.spinner-contacto').show();
    $('#contact_send').hide();
    $('#contact_captcha').hide();

    axios.post
    ('/contact/send', formData)
        .then(function (response) {

            $('.spinner-contacto').hide();
            let result = response.data;
           
            if(result.message === 'invalid captcha'){
                $('#contact_captcha').show();
                $('#contact_captcha').html(result.message);
            }else{
                $('#contact_send').show();
                $('#contact_captcha').hide();
                document.getElementById('frm-contact').reset();
               
            }
            
            
        })
        .catch(function (error) {

            var result = error.response.data;

            $('.spinner-contacto').hide();

           

        })
        .then(function () {
        }); 
}
