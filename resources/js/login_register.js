$(document).ready(function(){
    $(".tab a").on("click", function (e) {
        e.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        target = $(this).attr("href");
        $(".tab-content > div").not(target).hide();
        $(target).fadeIn(600);
    });

    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
        $('#message').html('Matching').css('color', 'green');
        } else 
        $('#message').html('Not Matching').css('color', 'red');
    });
});
  