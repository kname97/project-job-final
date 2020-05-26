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
            url:'list-accounts' ,
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
                url: 'manage-accounts/delete' + '/' + id,
                type: "GET",
                success: function (data) {
                    let oTable = $('#listUsers').dataTable();
                    oTable.fnDraw(false);
                },
                error: function (data) {
                    console.log('Error: ', data);
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
            action : 'manage-account/save',
            method : 'post'
        });
        $('#user_id').val(id);
        $.ajax({
            type: 'GET',
            url: 'manage-accounts/edit' + '/' + id,
            success: function (data) {
                $('#editusername').val(data.username);
                $('#editemail').val(data.email);
                $("input[name=editlevel][value=" + data.level + "]").attr('checked', 'checked');
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
            'level' :  $('input[name=editlevel]:checked').val(),
        };
        $.ajax({
            data : dataEdit,
            type : 'post',
            url : 'manage-account/save',
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
