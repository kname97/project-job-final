$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper-toggle").toggleClass("toggled");
  });

$(document).ready(function () {
    // data table
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#listUsers').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        search: true,
        ajax: {
            url: route('listAccounts') ,
            // '{{route('listAccounts')}}'
            type: 'GET',
        },
        columns: [
            {data: 'id' , name: 'id'},
            {data: 'username', name: 'username'},
            {data: 'email', name: 'email'},
            {data: 'level', name: 'level'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            // {data: 'action' ,searchable: false}
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });

    //delete account
    $('body').on('click', '#delete', function () {
        let id = $(this).data("id");
        // if (confirm('Bạn muốn tài khoản ' + id + ' ?') === true)
            $.ajax({
                url: route('deleteAccount', id),
                type: "GET",
                success: function (data) {
                    let oTable = $('#listUsers').dataTable();
                    oTable.fnDraw(false);
                    toastr.success( 'Xóa tài khoản thành công', 'Thông báo', {timeOut: 1000});
                },
                error: function (data) {
                    console.log('Error: ', data);
                    toastr.error( 'Xóa tài khoản thất bại', 'Thông báo', {timeOut: 1000});
                }
            });
    });
    // edit account
    $('body').on('click','#edit', function () {
        let id = $(this).data("id");
        $('#editAccount').modal('show');
        $('#editAccountForm').attr({
            id : 'editAccountForm',
            name : 'editAccountForm',
            action : route('saveAccount'),
            method : 'post'
        });
        $('#user_id').val(id);
        $.ajax({
            type: 'GET',
            url: route('editAccount',id),
            success: function (data) {
                $('#editusername').val(data.username);
                $('#editemail').val(data.email);
                $('#editpassord').val(data.password);
                // $("input[name=editlevel][value=" + data.level + "]").attr('checked', 'checked');
            },
            error: function (data) {
                console.log("lỗi"   , data.username);
            }
        });
    });
    // save changed
    $('#editAccountForm').submit(function(){
        $('#btn-save-account').html('<i class="fa fa-spin fa-spinner"></i>');
        let dataEdit = {
            'username' :  $('#editusername').val(),
            'email' :  $('#editusername').val(),
            'password' :  $('#editpassord').val(),
        };
        $.ajax({
            data : dataEdit,
            type : 'post',
            url : route('saveAccount'),
            dataType: 'json',
            success : function (data) {
                console.log(data);
            },
            error : function (data) {
                console.log('lỗi' , data);

            }
        });

    });
});
