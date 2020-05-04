$(document).ready(function () {

$("#loginSubmit").click(function(e){
    e.preventDefault();
    const txtemail =  $('#txtemail').val();
    const txtpassword = $('#txtpassword').val();
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
            'email'    : txtemail,
            'password' :  txtpassword
        },
        success: function (data) {
            $('#loginSubmit').html('Đăng nhập');
			if (data.status === 'error') {
                    $('.errorEmail').show().text(data.message.email);
                    $('#txtemail').addClass('is-invalid');
                    $('.errorPassword').show().text(data.message.password);
                    $('#txtpassword').addClass('is-invalid');
                if (data.false == true) {
                    $('.errorLogin').show().text(data.message);
                }
                if(txtemail.length > 0){
                    $('.errorEmail').hide();
                    $('#txtemail').removeClass('is-invalid');
                    // $('.errorLogin').hide();
                }
                if (txtpassword.length > 0){
                    $('.errorPassword').hide();
                    $('#txtpassword').removeClass('is-invalid');
                    // $('.errorLogin').hide();
                }
			}
            // }
            else{
                // console.log(data);
                // location.assign(data.html);
                // $('.errorLogin').removeClass('alert-danger ');
                // $('.errorLogin').removeClass('text-danger');
                // $('.errorLogin').addClass('alert-success ');
                // $('.errorLogin').addClass('text-success');
                $('.errorLogin').show().text(data.message);

                toastr.success(' ', 'đăng nhập thành cônng', {timeOut: 3000, positionClass: 'wrapper'});
                    // location.reload();
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
