$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper-toggle").toggleClass("toggled");
  });

// $(function () {
//     $('#listUsers').DataTable({
//         // processing : true,
//         // serverSide : true,
//         ajax : 'list-accounts',
//         column : [
//             { data: 'id', name: 'id' },
//             { data: 'username', name: 'username' },
//             { data: 'email', name: 'email' },
//             { data: 'created_at', name: 'created_at', defaultContent: ""},
//             { data: 'updated_at', name: 'updated_at' , defaultContent: ""}
//         ]
//     })
// });
