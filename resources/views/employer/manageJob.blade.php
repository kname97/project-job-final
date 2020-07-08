@extends('layouts.master')
@section('title','quản lý tin tuyển dụng')
@section('content')
    <div class="container content-child">
        <table class="table table-hover" id="listmanagerJobs" >
            <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Tiêu đề</th>
                <th>Thể loại</th>
                <th>Danh mục</th>
                <th>Giá thấp nhất</th>
                <th>Giá cao nhất</th>
{{--                <th>Thỏa thuận</th>--}}
{{--                <th>Mô tả</th>--}}
{{--                <th>Vị trí</th>--}}
{{--                <th>Kinh nghiệm</th>--}}
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Trạng thái</th>
{{--                <th>Số lượng</th>--}}
{{--                <th>Khu vực</th>--}}
{{--                <th>Email</th>--}}
{{--                <th>Số điện thoại</th>--}}
{{--                <th>Tạo ngày</th>--}}
{{--                <th>Cập nhật ngày</th>--}}
                <th>Hành động</th>
            </tr>
            </thead>
        </table>
    </div>

    {{-- modal edit--}}
    <!-- Modal -->
    <div class="modal fade" id="editJob" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin tin tuyển dụng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editJobForm" name="editJobForm" class="form-horizontal">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="user_id" id="user_id" >
                        <div class="form-group">
                            <label for="uname1">Tiêu đề</label>
                            <input type="text" class="form-control " name="edittitle" id="edittitle" >
                            <small id="helpId" class="form-text text-danger error errorUsername">
                            </small>
                        </div>
                        <div class="form-group" >
                            <label for="uname1">TRực thuộc</label>
                            <select class="custom-control" name="editcategoryjob" id="editcategoryjob" >
                                <option value=""></option>
                                @foreach($jobCategory as $cateJob)
                                    <option value="{{$cateJob->name}}" >{{$cateJob->name}}</option>
                                @endforeach
                            </select>
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
