$(document).ready(function () {

    $("#loginSubmit").click(function (e) {
        e.preventDefault();
        const txtemail = $('#txtemail').val();
        const txtpassword = $('#txtpassword').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        $('#loginSubmit').html('Đang đăng nhập...');
        $.ajax({
            type: "post",
            url: "/",
            data: {
                'email': txtemail,
                'password': txtpassword
            },
            success: function (data) {
                $('#loginSubmit').html('Đăng nhập');
                if (data.status === 'error') {
                    $('.errorEmail').show().text(data.message.email);
                    $('#txtemail').addClass('is-invalid');
                    $('.errorPassword').show().text(data.message.password);
                    $('#txtpassword').addClass('is-invalid');
                    if (data.false === true) {
                        $('.errorLogin').show().text(data.message);
                    }
                    if (txtemail.length > 0) {
                        $('.errorEmail').hide();
                        $('#txtemail').removeClass('is-invalid');
                    }
                    if (txtpassword.length > 0) {
                        $('.errorPassword').hide();
                        $('#txtpassword').removeClass('is-invalid');
                    }
                } else {
                    $('.errorLogin').show().text(data.message);
                    toastr.success(' ', 'đăng nhập thành cônng', {timeOut: 3000, positionClass: 'wrapper'});
                    location.reload();
                    // location.href(data.html);

                    // window.location.href = "http://127.0.0.1:8000/";
                }

            },
            // error: function (data) {
            //     console.log(data);
            // }
        });

    });
});


//process bar in view post job
$(document).ready(function () {
    let current_fs, next_fs, previous_fs; //fieldsets
    let opacity;
    let current = 1;
    let steps = $("fieldset").length;
    setProgressBar(current);
    $(".next").click(function () {
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
//Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
//show the next fieldset
        next_fs.show();
//hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now) {
// for making fielset appear animation
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            },
            duration: 500
        });
        setProgressBar(++current);
    });
    $(".previous").click(function () {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
//Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
//show the previous fieldset
        previous_fs.show();
//hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now) {
// for making fielset appear animation
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            },
            duration: 500
        });
        setProgressBar(--current);
    });
    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }

    $(".submit").click(function () {
        return false;
    })

});
