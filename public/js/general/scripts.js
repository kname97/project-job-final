
$(document).ready(function () {
    // setup ajax all
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });
    $("#loginSubmit").click(function (e) {
        e.preventDefault();
        const txtemail = $('#txtemail').val();
        const txtpassword = $('#txtpassword').val();
        const checkError = function(){
            if (txtemail.length > 0) {

                $('.errorEmail').hide();
                $('#txtemail').removeClass('is-invalid');

            }
            if (txtpassword.length > 0) {
                $('.errorPassword').hide();
                $('#txtpassword').removeClass('is-invalid');
            }
        };
        $('#loginSubmit').html('Đang đăng nhập...');
        $.ajax({
            type: "post",
            url: route('loginUser'),
            data: {
                'email': txtemail,
                'password': txtpassword
            },

            dataType: 'json',
            success: function (data) {
                $('#loginSubmit').html('Đăng nhập');
                // console.log('thanhcong', data.errors);
                checkError();

                if (data.errors != null) {
                    $('.errorLogin').show().text(data.errors);
                    $('.errorLogin').addClass('alert-danger');
                } else {
                    $('.errorLogin').show().text(data.message);
                    $('.errorLogin').removeClass('alert-danger');
                    $('.errorLogin').addClass('alert-success');
                    window.location.reload();
                }


            },
            error: function (data, xhr) {
                $('#loginSubmit').html('Đăng nhập');
                // console.log('lỗi', xhr);
                let errorsJS = data.responseJSON.errors;
                $('.errorEmail').show().text(errorsJS.email);
                $('#txtemail').addClass('is-invalid');
                $('.errorPassword').show().text(errorsJS.password);
                $('#txtpassword').addClass('is-invalid');
                console.log(errorsJS);
                checkError();
            }
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
    });


    //select2 in postJob
    $('#select-categoryJob').select2({
        placeholder: 'Chọn danh mục',
        containerCssClass: "form-control"
        // },
    });

    // trumbowyg
    $('#description-postjob').trumbowyg({
        lang: 'vi',
        btns: [
            ['viewHTML'],
            ['formatting'],
            ['historyUndo','historyRedo'],
            ['strong', 'em', 'del'],
            ['align'],
            ['foreColor', 'backColor'],
            ['link'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen'],
        ],
        autogrow: true
    });
    $('#description-profile').trumbowyg({
        lang: 'vi',
        btns: [
            ['viewHTML'],
            ['formatting'],
            ['historyUndo','historyRedo'],
            ['strong', 'em', 'del'],
            ['align'],
            ['foreColor', 'backColor'],
            ['link'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen'],
        ],
        autogrow: true
    });

    // checked begotiable
    // $( "#negotiable" ).on( "click", function() {
    //     if( $('#negotiable:checkbox:checked').length > 0){
    //         $("input[name=minsalary]").attr('disabled', 'disabled');
    //         $("input[name=maxsalary]").attr('disabled', 'disabled');
    //     }else {
    //         $("input[name=minsalary]").attr('disabled', '');
    //         $("input[name=maxsalary]").attr('disabled', '');
    //     }

    // });
    $("input[name='minsalary']").datepicker({
        format: 'dd-mm-yyyy',
        changeMonth: true,
        changeYear: true
    });
    $("input[name='maxsalary']").datepicker({

        format: 'dd-mm-yyyy',
        changeMonth: true,
        changeYear: true

    });
});
