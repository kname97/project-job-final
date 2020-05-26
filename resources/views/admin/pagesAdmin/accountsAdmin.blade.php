@extends('admin.layoutsAdmin.masterAdmin')
@section('title', ' Quản lý tài khoản thành viên')
@section('breadcrumd','Quản lý tài khoản')
@section('content')
    <table class="table table-hover" id="listUsers" >
        <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Chức năng</th>
            <th>Tạo ngày</th>
            <th>Cập nhật ngày</th>
            <th>Hành động</th>
        </tr>
        </thead>
    </table>

{{-- modal edit--}}
    <!-- Modal -->
    <div class="modal fade" id="editAccount" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin tài khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editAccountForm" name="editAccountForm" class="form-horizontal">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="user_id" id="user_id" >
                        <div class="form-group">
                            <label for="uname1">Tên tài khoản</label>
                            <input type="text" class="form-control " name="editusername" id="editusername" >
                            <small id="helpId" class="form-text text-danger error errorUsername">
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="uname1">Email</label>
                            <input type="text" class="form-control " name="editemail" id="editemail">
                            <small id="helpId" class="form-text text-danger error errorEmail">
                            </small>
                        </div>
                        <div class="form-inline ">
                            <label for="" class="col-md-3"> Bạn là một <span class="text-danger">*</span></label>
                            <div class=" col-md-9 ">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="employee" name="editlevel" class="custom-control-input" value="1" checked>
                                    <label class="custom-control-label" for="employee">Người tìm việc</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="employer" name="editlevel" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="employer">Nhà tuyển dụng </label>
                                </div>
                            </div>
                            {{-- form check phân quyền user --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" id="btn-save-account">Lưu</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
