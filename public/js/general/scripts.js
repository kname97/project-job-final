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
        const checkError = function () {
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
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


    //select2 in postJobs
    $('#select-categoryJob').select2({
        placeholder: 'Chọn danh mục',
        // },
    });
    $('#select-location').select2({
        placeholder: 'Chọn khu vực',
        // },
    });
    $('#category-select').select2({
        placeholder: 'Chọn ngành / Nghề',
    });
    $('#location-select').select2({
        placeholder: 'Chọn địa điểm',
    });

    // trumbowyg
    $('#description-postjob').trumbowyg({
        lang: 'vi',
        btns: [
            ['viewHTML'],
            ['formatting'],
            ['historyUndo', 'historyRedo'],
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
            ['historyUndo', 'historyRedo'],
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
    $('#content-review').trumbowyg({
        lang: 'vi',
        btns: [
            ['viewHTML'],
            ['formatting'],
            ['historyUndo', 'historyRedo'],
            ['strong', 'em', 'del'],
            ['align'],
            ['foreColor', 'backColor'],
            ['link'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen'],
        ],
        // autogrow: true
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


});

//fix overlay
$(document).ready(function () {
    $('#negotiable').change(function () {
        $('#minsalary').attr('disabled', this.checked);
        $('#minsalary').val('');
        $('#maxsalary').attr('disabled', this.checked);
        $('#maxsalary').val('');
    });
});


// data tables manager job
$(document).ready(function () {
    // data table
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#listmanagerJobs').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        search: true,
        ajax: {
            url: route('getDataJobEmployer') ,
            type: 'GET',
        },
        columns: [
            {data: 'id' , name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'jobtype', name: 'jobtype'},
            {data: 'jobcategory', name: 'jobcategory'},
            {data: 'minsalary' , name: 'minsalary'},
            {data: 'maxsalary', name: 'maxsalary'},
            {data: 'startdate' , name: 'startdate'},
            {data: 'enddate', name: 'enddate'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            // {data: 'action' ,searchable: false}
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });
    //delete postJob
    $('body').on('click', '#delete-job', function () {
        let id = $(this).data("id");
        let checkstr =  confirm('bạn có chắc chắn xóa tin tuyển dụng này chứ?');
        // if (confirm('Bạn muốn tài khoản ' + id + ' ?') === true)
        if(checkstr) {
            $.ajax({
                url: route('deleteJob', id),
                type: "GET",
                success: function (data) {

                    let oTable = $('#listmanagerJobs').dataTable();
                    oTable.fnDraw(false);
                    toastr.success('Xóa tin tuyển dụng thành công', 'Thông báo', {timeOut: 500});
                    x``

                },
                error: function (data) {
                    console.log('Error: ', data);

                }
            });
        }
        toastr.error('Xóa tin tuyển dụng thất bại', 'Thông báo', {timeOut: 500});
        return false;
    });

    //eidt job
    // edit account
    $('body').on('click','#edit-job', function () {
        let id = $(this).data("id");
        $('#editJob').modal('show');
        $('#editJobForm').attr({
            id : 'editJobForm',
            name : 'editJobForm',
            action : 'manage-account/save',
            method : 'post'
        });
        $('#user_id').val(id);
        $.ajax({
            type: 'GET',
            url: route('editJob',id),
            success: function (data) {
                $('#edittitle').val(data.title);
                // $('#editemail').val(data.email);
                // $("input[name=editlevel][value=" + data.level + "]").attr('checked', 'checked');
            },
            error: function (data) {
                console.log("lỗi"   , data.username);
            }
        });
    });
});