@extends('admin.layoutsAdmin.masterAdmin')
@section('title', ' Quản lý tài khoản thành viên')
@section('breadcrumd','Quản lý tài khoản')
@section('content')
    <table class="table table-hover" id="listUsers" >
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
    </table>
    <?php $faker = Faker\Factory::create();
    echo $faker->userName ?>
@endsection
