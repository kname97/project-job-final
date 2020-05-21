@extends('admin.layoutsAdmin.masterAdmin')
@section('title', ' Quản lý tài khoản thành viên')
@section('breadcrumd','Quản lý tài khoản')
@section('content')
    <h3> quản lý tài khoản</h3>
    <table class="table table-bordered" id="listUsers" style="margin-bottom: 10px;">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
    </table>
@endsection
