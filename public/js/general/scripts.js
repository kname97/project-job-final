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
    $('#editcategoryjob').select2({
        dropdownParent: $('#editJob'),
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
        autogrow: true
    });
    $('#description-employer').trumbowyg({
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
            url: route('getDataJobEmployer'),
            type: 'GET',
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'jobtype', name: 'jobtype'},
            {data: 'jobcategory', name: 'jobcategory'},
            {data: 'minsalary', name: 'minsalary'},
            {data: 'maxsalary', name: 'maxsalary'},
            {data: 'startdate', name: 'startdate'},
            {data: 'enddate', name: 'enddate'},
            {data: 'status', name: 'status'},
            // {data: 'created_at', name: 'created_at'},
            // {data: 'updated_at', name: 'updated_at'},
            // {data: 'action' ,searchable: false}
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });
    //delete postJob
    $('body').on('click', '#delete-job', function () {
        let id = $(this).data("id");
        let checkstr = confirm('bạn có chắc chắn xóa tin tuyển dụng này chứ?');
        // if (confirm('Bạn muốn tài khoản ' + id + ' ?') === true)
        if (checkstr) {
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

        return false;
        // toastr.error('Xóa tin tuyển dụng thất bại', 'Thông báo', {timeOut: 500});
    });

    //eidt job
    // edit account
    $('body').on('click', '#edit-job', function () {
        let id = $(this).data("id");
        $('#editJob').modal('show');
        $('#editJobForm').attr({
            id: 'editJobForm',
            name: 'editJobForm',
            action: 'manage-account/save',
            method: 'post'
        });
        $('#user_id').val(id);
        $.ajax({
            type: 'GET',
            url: route('editJob', id),
            success: function (data) {
                $('#edittitle').val(data.title);
                $('#editcategoryjob').val(data.jobcategory);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                $('#edittitle').val(data.title);
                // $("input[name=editlevel][value=" + data.level + "]").attr('checked', 'checked');
            },
            error: function (data) {
                console.log("lỗi", data.username);
            }
        });
    });
});

// update avatar for employeee
function doAfterSelectAvatarEmployee(input) {
    readURLEmployee(input);
    uploadEmployeeAvatar();
}
//upload avatar for employer

function doAfterSelectAvatarEmployer(input) {
    readURLEmployer(input);
    uploadEmployerAvatar();
}
function readURLEmployee(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            $('#user_avatar').css('background-image', 'url(' + e.target.result + ')');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURLEmployer(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            $('#user_avatar_emloyer').css('background-image', 'url(' + e.target.result + ')');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function uploadEmployeeAvatar() {
    let form_upload = $('#user_avatar_save_form');
    let formData = new FormData(document.getElementById("user_avatar_save_form"));
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });
    $.ajax({
        type: 'post',
        data: formData,
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        url: route('updateAvatar'),
        success: function (response) {
            toastr.success('đăng ảnh đại diện thành công ');
        }.bind($(this)),
        error: function (data) {
            toastr.error(data.responseJSON.errors.avatar);
        }
    });
}

function uploadEmployerAvatar() {
    let form_upload = $('#employer_avatar_save_form');
    let formData = new FormData(document.getElementById("employer_avatar_save_form"));
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });
    $.ajax({
        type: 'post',
        data: formData,
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        url: route('employer.updateAvatar'),
        success: function (response) {
            toastr.success('đăng ảnh đại diện thành công ');
        }.bind($(this)),
        error: function (data) {
            toastr.error(data.responseJSON.errors.avatar);
        }
    });
}

// add employer to wishlist
$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });
    //add wishlist
    $('#wishlist_employer').click(function (e) {
        let id = $(this).data("id");
        $.ajax({
            type: "post",
            url: route('employee.addWLEmployer',id),
            success: function (response) {
                $('#wishlist_employer').css('background-color', 'red');
                    $('#wishlist_employer').html('Đã thêm vào danh sách yêu thích');
                $('#wishlist_employer').css("pointer-events", "none");
                toastr.success(response.message);
                console.log(response);
            },
            error: function (response) {
                console.log('lỗi', response)
            },
        });
    });

//    del wishlist
    $('#del-wishlist').click(function (e) {
        let id = $(this).data('id');
        $.ajax({
           type: 'get',
           url: route('employee.delWLEmployer',id),
            success: function (response) {
                location.reload();
                toastr.success( 'Xóa nhà tuyển dụng ra khỏi danh sách thành công', 'Thông báo', {timeOut: 1000});
            },
            error: function (data) {
                console.log('Error: ', data);
                toastr.error( 'Xóa nhà tuyển dụng ra khỏi danh sách thất bại', 'Thông báo', {timeOut: 1000});
            }
        });
    });
});

//tag input
$("input[name='txttag_skill']").tagsinput({
    tagClass: 'label label-info',
    maxTags: 6,
});

$('#form-create-profile').on('keyup keypress', function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) {
        e.preventDefault();
        return false;
    }
});
// lưu tin tuyển dụng
$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });
    $('#wishlist_job').click(function () {
        let id = $(this).data("id");
        console.log(id);
        $.ajax({
            type: "POST",
            url: route('employee.addWLJob',id),
            success: function (response) {
                $('#wishlist_job').addClass('inactive-Link');
                // $('a#wishlist_job').css('background-color', 'red');
                $('a#wishlist_job').html('Đã lưu');
                // $('a#wishlist_job').css("pointer-events", "none");
                toastr.success(response.message);
                console.log(response);
            },
            error: function (response) {
                console.log('lỗi', response)
            },
        });
    });

    $('#del-wishlist-job').click(function (e) {
        let id = $(this).data('id');
        $.ajax({
            type: 'get',
            url: route('employee.delWLJob',id),
            success: function (response) {
                location.reload();
                toastr.success( 'Xóa nhà tuyển dụng ra khỏi danh sách thành công', 'Thông báo', {timeOut: 1000});
            },
            error: function (data) {
                console.log('Error: ', data);
                toastr.error( 'Xóa nhà tuyển dụng ra khỏi danh sách thất bại', 'Thông báo', {timeOut: 1000});
            }
        });
    });
});

// ứng tuyển vào công việc
$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });
    $('#apply_job').click(function () {
        let id = $(this).data("id");
        $.ajax({
            type: "POST",
            url: route('employee.apply',id),
            success: function (response) {
                $('#apply_job').addClass('inactive-Link');
                // $('a#apply_job').css('background-color', 'red');
                $('#apply_job').html('Đã nộp');
                // $('a#apply_job').css("pointer-events", "none");
                toastr.success(response.message);
                // console.log(response.message);
            },
            error: function (response) {
                console.log('lỗi', response)
            },
        });
    });

    $('#del-wishlist-job').click(function (e) {
        let id = $(this).data('id');
        $.ajax({
            type: 'get',
            url: route('employee.delWLJob',id),
            success: function (response) {
                location.reload();
                toastr.success( 'Xóa nhà tuyển dụng ra khỏi danh sách thành công', 'Thông báo', {timeOut: 1000});
            },
            error: function (data) {
                console.log('Error: ', data);
                // toastr.error( 'Xóa nhà tuyển dụng ra khỏi danh sách thất bại', 'Thông báo', {timeOut: 1000});
            }
        });
    });
});

//datatable applied employee
$(document).ready(function () {
    // data table
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#listmanagerApllies').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        search: true,
        ajax: {
            url: route('getViewManageApplies'),
            type: 'GET',
        },
        columns: [
            {data: 'apply_id', name: 'apply_id'},
            {data: 'status', name: 'status'},
            {data: 'title', name: 'title'},
            {data: 'minsalary', name: 'minsalary'},
            {data: 'maxsalary', name: 'maxsalary'},
            {data: 'jobcategory', name: 'jobcategory'},

            {data: 'startdate', name: 'startdate'},
            {data: 'enddate', name: 'enddate'},
            // {data: 'created_at', name: 'created_at'},
            // {data: 'updated_at', name: 'updated_at'},

        ],
    });
});

