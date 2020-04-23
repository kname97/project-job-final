$(document).ready(function () {

$("#loginSubmit").click(function(e){
    e.preventDefault();
    $.ajaxSetup({
        headers : {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content'),
        }
    });
    $('#loginSubmit').html('Đang đăng nhập...');
    $.ajax({
        type : "post",
        url  : "/",
        data : {
            'email'    : $('#email').val(),
            'password' : $('#password').val()
        },
        success: function (data) {
            // console.log(data);
			if (data.error == true) {
                $('.error').hide();
                if (data.message.email != undefined) {
                    $('.errorEmail').show().text(data.message.email[0]);
                    $('#email').addClass('is-invalid');
                }
                if (data.message.password != undefined) {
                    $('.errorPassword').show().text(data.message.password[0]);
                    $('#password').addClass('is-invalid');
                }
                if (data.message.errorlogin != undefined) {
                    $('.errorLogin').show().text(data.message.errorlogin[0]);
                }
            }
            else {
                // $('#email').removeClass('is-invalid');
                // $('#password').removeClass('is-invalid');

                location.assign(data.html);
                // location.reload();
                // location.href(data.html);
	            // toastr.success(' ', 'đăng nhập thành cônng', {timeOut: 3000, positionClass: 'wrapper'});
			    // window.location.href = "http://127.0.0.1:8000/"
			}

        }
    });

});
});
