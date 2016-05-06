
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

    if ($(window).scrollTop() > 50) {
        $('.navbar-default').addClass('is-scrolled');
        $('.dropdown-menu').addClass('is-scrolled');
        $('.navbar-brand').addClass('logo-is-scrolled');
    }
    else {
        $('.navbar-default').removeClass('is-scrolled');
        $('.dropdown-menu').removeClass('is-scrolled');
        $('.navbar-brand').removeClass('logo-is-scrolled');
    }

});

$(window).load(function() {

    sidebar_height();

    if ($(window).scrollTop() > 100) {
        $('.navbar-default').addClass('is-scrolled');
        $('.dropdown-menu').addClass('is-scrolled');
    }
    else {
        $('.navbar-default').removeClass('is-scrolled');
        $('.dropdown-menu').removeClass('is-scrolled');
    }

});

//make sidebar same height as console window

function sidebar_height() {
    if ($(window).width() > 768) {
        var console = $('.console').height();
        var sidebar = $('.sidebar').height();
            if (console > sidebar) {
                $('.sidebar').css({'min-height': console});
            }
    }
}

//search page

//when user clicks search button run the ajax call to database

$('#search_submit').click(function(event) {
    var space_type = $('#space_type').val();
    var space_city = $('#space_city').val().charAt(0).toUpperCase() + $('#space_city').val().slice(1).toLowerCase();
    var trimmed_city = space_city.replace(/\s+$/, '');
    var space_state = $('#space_state').val().toUpperCase();
    event.preventDefault();

    $.ajax({
        url: 'includes/spaces_db.php',
        type: 'get',
        dataType: 'json',
        success: function(data) {
            console.log(data);
            search_results(space_type, trimmed_city, space_state, data);
        }
    });

    scroll_to(this);

});

//get the results of the search and the ajax call

function search_results(space_type, space_city, space_state, data) {
    var results = [];
    var i;

    //determine if the result is within search parameters

    for (i = 0; i < data.rows.length; i++) {
        if (data.rows[i].value.city == space_city && data.rows[i].value.state == space_state) {
            results.push(data.rows[i]);
        }
    }

    //create the html for the results

    $('#results').html('');

    for (i = 0; i < results.length; i++) {
        $('#results').append(
            '<div class="space_result">' +
            '<h2>' + results[i].value.title + '</h2>' +
            '<img class="space_pic" src="' + results[i].value.image + '">' +
            '<p>' + results[i].value.desc + '</p>' +
            '<form action="view.php" method="post">' +
            '<input type="hidden" name="current_space" value="' + results[i].value.title + '">' +
            '<button class="btn btn-primary">View Space</button>' +
            '</form>' +
            '</div>'
        );
    }

    sidebar_height();

}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (event) {
            $('#prev_pic').attr('src', event.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$("#prof_pic").change(function(){
    readURL(this);
});

function scroll_to(ele_clicked) {
    $('html, body').animate({
        scrollTop: $( $.attr(ele_clicked, 'href') ).offset().top - 100
    },900);
}
