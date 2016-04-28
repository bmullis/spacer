
//main scripts file


//pop up window for login and registration

$("#modal_trigger").leanModal({
    top: 0,
    overlay: 0.6,
    closeButton: ".modal_close"
});


//login and register

//confirm passwords match

$('#reg_submit').click(function(event){
    var password = $('#reg_password').val();
    var conf_password = $('#conf_password').val();

    if (password !== conf_password) {
        $('#error').html('Passwords Do Not Match');
        $('#conf_password').focus();
        event.preventDefault();
    }

});

//change nav bg color on scroll

$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.navbar-default').addClass('is-scrolled');
    }
    else {
        $('.navbar-default').removeClass('is-scrolled');
    }

});

$(window).load(function() {

    if ($(window).scrollTop() > 100) {
        $('.navbar-default').addClass('is-scrolled');
    }
    else {
        $('.navbar-default').removeClass('is-scrolled');
    }

});