@extends('layouts.master')
@section('title','Trang đăng ký')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 form-group">
                <div class="form-group">
                    <h2 class="label-regis"> Đăng ký </h2>
                </div>
                <form action="{{ route('createUser') }}" method="post">
                    @csrf
                    <div class="form-inline form-child">
                        <label for="" class="col-md-3"> Tên đăng nhập <span class="text-danger">*</span></label>
                        <input type="text" class="form-control col-md-7 {{ $errors->has('txtusername') ? ' is-invalid' : '' }}" name="txtusername" id="txtusername" aria-describedby="helpId" >
                        @if($errors->has('txtusername'))
                            <small id="helpId" class="form-text text-danger col-md-9 offset-md-3 ">
                                {{$errors->first('txtusername')}}
                            </small>
                        @endif
                        {{-- check lỗi bằng vadilate --}}
                    </div>
                    <div class="form-inline form-child ">
                        <label for="txtemail" class="col-md-3"> Email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control col-md-7 {{ $errors->has('txtemail') ? ' is-invalid' : '' }}" name="txtemail" id="txtemail" aria-describedby="helpId" >
                        @if($errors->has('txtemail'))
                            <small id="helpId" class="form-text text-danger col-md-9 offset-md-3 ">
                                {{$errors->first('txtemail')}}
                            </small>
                        @endif
                        {{-- bắt lỗi email --}}
                    </div>
                    <div class="form-inline form-child">
                        <label for="" class="col-md-3"> Mật khẩu <span class="text-danger">*</span></label>
                        <input type="password" class="form-control col-md-7 {{ $errors->has('txtpassword') ? ' is-invalid' : '' }}" name="txtpassword" id="txtpassword" aria-describedby="helpId" >
                        @if($errors->has('txtpassword'))
                            <small id="helpId" class="form-text text-danger col-md-9 offset-md-3 ">
                                {{$errors->first('txtpassword')}}
                            </small>
                        @endif
                        {{-- check lỗi bằng vadilate --}}
                    </div>
                    <div class="form-inline form-child">
                        <label for="" class="col-md-3"> Xác nhận mật khẩu <span class="text-danger">*</span></label>
                        <input type="password" class="{{ $errors->has('txtpassword') ? ' is-invalid' : '' }} form-control col-md-7" name="txtpassword_confirmation" id="password-confirm" aria-describedby="helpId" >
                        @if($errors->has('txtpassword'))
                            <small id="helpId" class="form-text text-danger col-md-9 offset-md-3 ">
                                {{$errors->first('txtpassword')}}
                            </small>
                        @endif
                        {{-- check lỗi bằng vadilate --}}
                    </div>
                    <div class="form-inline form-child">
                        <label for="" class="col-md-3"> Bạn là một<span class="text-danger">*</span></label>
                        <div class=" col-md-7 ">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="employee" name="txtlevel" class="custom-control-input" value="1" checked>
                                <label class="custom-control-label" for="employee">Người tìm việc</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="employer" name="txtlevel" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="employer">Nhà tuyển dụng </label>
                            </div>
                        </div>
                        {{-- form check phân quyền user --}}
                    </div>
                    <hr>
                    <div class="form-group text-right  form-child ">
                        <button type="reset" class="btn btn-outline-secondary " >Hủy bỏ</button>
                        <button type="submit" class="btn btn-success" id="btnRegis">Đăng ký</button>
                    </div>
                </form>
            </div>
            <div class="col-4 form-group">
                <div class="text-center promo">
                    <div class="promo-box">
                        <i class="fa fa-picture-o fa-3x" aria-hidden="true"></i>
                        <h3><strong>Đăng tuyển</strong></h3>
                        <p>
                            Bạn có một bài viết để điền vào trong công ty của bạn?
                            Tìm ứng viên phù hợp chỉ trong vài cú nhấp chuột Giới thiệu việc làm.
                        </p>
                    </div>
                    <div class="promo-box">
                        <i class="fas fa-pencil-alt fa-3x"></i>
                        <h3><strong>Tạo và quản lý công việc</strong></h3>
                        <p>
                            Trở thành một công ty tốt nhất.
                            Tạo và quản lý công việc của bạn. Đăng lại công việc cũ của bạn, v.v..
                        </p>
                    </div>
            </div>

        </div>


    </div>
@endsection
