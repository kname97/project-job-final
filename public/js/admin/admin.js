$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper-toggle").toggleClass("toggled");
  });

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#listUsers').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: 'list-accounts',
            type: 'GET',
        },
        columns: [
            { data: 'id' , name: 'id'},
            { data: 'username' , name: 'username'},
            { data: 'email'  , name: 'email'},
            { data: 'created_at' , name: 'created_at'},
            { data: 'created_at' , name: 'created_at' },
            // {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });
});
