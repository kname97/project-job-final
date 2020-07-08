@extends('layouts.master')
@section('title','Trang đăng tin tuyển dụng')
@section('content')
    <div class="container">
        <div class="row justify-content-center content-post-jobs ">
            <div class="col-12 ">
                <div class="card px-5 pt-5">
                    <h2 id="heading">Đăng tin tuyển dụng</h2>
                    <form id="msform" method="post" action="{{ route('jobStore') }}">
                        <!-- progressbar -->
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div id="progressbar">
                            <li class="active" id="basic"><strong>Thông tin cơ bản</strong></li>
                            <li id="detail"><strong>Nội dung chi tiết</strong></li>
                            <li id="company"><strong>Thông tin liên hệ</strong></li>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Thông tin cơ bản</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Bước 1</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Tiêu đề: *</label>

                                <input type="text" name="txttitle" class="title-job form-control {{ $errors->has('txttitle') ? ' is-invalid' : '' }}"
                                       placeholder="Tiêu đề đơn tuyển dụng"/>
                                @if($errors->has('txttitle'))
                                    <small id="helpId" class="form-text text-danger">
                                        {{$errors->first('txttitle')}}
                                    </small>
                                @endif
                                <label class="fieldlabels">Trực thuộc: *</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select {{ $errors->has('txtcategoryJob') ? ' is-invalid' : '' }}" name="txtcategoryJob" id="select-categoryJob">
                                        <option value=""></option>
                                        @foreach($jobCategory as $cateJob)
                                            <option value="{{$cateJob->name}}">{{$cateJob->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @if($errors->has('txtcategoryJob'))
                                    <small id="helpId" class="form-text text-danger">
                                        {{$errors->first('txtcategoryJob')}}
                                    </small>
                                @endif
                                <label class="fieldlabels">Mô tả : </label>
                                <textarea class="form-control rounded-0" name="txtdescription" id="description-postjob"
                                          rows="10"></textarea>
                            </div>
                            <button type="button" name="next" class="next action-button" >Tiếp</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Thông tin chi tiết:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Bước 2 </h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Loại công việc : *</label>
                                <div class="input-group mb-3">
                                    <select class="type-job input-group form-control" name="typejob" id="type-job">
                                        <option value="Bán thời gian">Bán thời gian</option>
                                        <option value="Toàn thời gian">Toàn thời gian</option>
                                        <option value="Thực tập">Thực tập</option>
                                        <option value="Freelancer">Freelancer</option>
                                    </select>
                                </div>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label class="fieldlabels "> Lương tối thiểu :</label>
                                        <input class=" form-control mx-sm-5 {{ $errors->has('minsalary') ? ' is-invalid' : '' }} " type="text" name="minsalary" id="minsalary" data-toggle="tooltip"
                                               data-placement="bottom" title="{{$errors->has('minsalary') ? $errors->first
                                               ('minsalary') : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="fieldlabels mx-sm-5"> Lương tối đa :</label>
                                        <input class=" form-control mx-sm-5 {{ $errors->has('maxsalary') ? ' is-invalid' : ''
                                        }}" type="text" name="maxsalary" id="maxsalary" data-toggle="tooltip"
                                               data-placement="bottom" title="{{$errors->has('maxsalary') ? $errors->first
                                               ('maxsalary') : ''}}">

                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="negotiable" id="negotiable"
                                               value="on">
                                        <label class="custom-control-label" for="negotiable">Thỏa thuận</label>
                                    </div>
                                </div>
                                <label class="fieldlabels">Ngày bắt đầu : *</label>
                                <input type="date" class="form-control {{ $errors->has('startdate') ? ' is-invalid' : '' }}" name="startdate" />
                                @if($errors->has('startdate'))
                                    <small id="helpId" class="form-text text-danger">
                                        {{$errors->first('startdate')}}
                                    </small>
                                @endif
                                <label class="fieldlabels">Ngày kết thúc : *</label>
                                <input type="date" class="form-control {{ $errors->has('enddate') ? ' is-invalid' : '' }}" name="enddate"/>
                                @if($errors->has('enddate'))
                                    <small id="helpId" class="form-text text-danger">
                                        {{$errors->first('enddate')}}
                                    </small>
                                @endif
                                <label class="fieldlabels">Số lượng cần tuyển: *</label>
                                <input type="number" class="form-control {{ $errors->has('amount') ? ' is-invalid' : '' }}"
                                name="amount"/>
                                @if($errors->has('amount'))
                                    <small id="helpId" class="form-text text-danger">
                                        {{$errors->first('amount')}}
                                    </small>
                                @endif
                                <label class="fieldlabels">Chức vụ: *</label>
                                <label class="fieldlabels">Loại công việc : *</label>
                                <div class="input-group mb-3">
                                    <select class=" input-group form-control {{ $errors->has('position') ? ' is-invalid' : '' }}"name="position">
                                        <option value="Nhân viên">Nhân viên</option>
                                        <option value="Quản lý">Quản lý</option>
                                        <option value="Giám đốc">Giám đốc</option>
                                        <option value="Kỹ thuật viên">Kỹ thuật viên</option>
                                    </select>
                                </div>
                                @if($errors->has('position'))
                                    <small id="helpId" class="form-text text-danger">
                                        {{$errors->first('position')}}
                                    </small>
                                @endif
                                <label class="fieldlabels">Yêu cầu kinh nghiệm: *</label>
                                <input type="number"  class="form-control {{ $errors->has('exp') ? ' is-invalid' : '' }}" name="exp"/>
                                @if($errors->has('exp'))
                                    <small id="helpId" class="form-text text-danger">
                                        {{$errors->first('exp')}}
                                    </small>
                                @endif
                            </div>
                            <button type="button" name="next" class="next action-button" >Tiếp</button>
                            <button type="button" name="previous" class="previous action-button-previous" >Quay lại</button>

                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Thông tin liên hệ :</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Bước 3</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Khu vực: *</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="location" id="select-location">
                                        <option value=""></option>
                                        @foreach($locations as $location)
                                            <option value="{{$location->city}}">{{$location->city}}</option>
                                        @endforeach

                                    </select>
                                    @if($errors->has('location'))
                                        <small id="helpId" class="form-text text-danger">
                                            {{$errors->first('location')}}
                                        </small>
                                    @endif
                                </div>
                                <label class="fieldlabels">Địa chỉ : *</label>
                                <input type="text" class="form-control  {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address"/>
                                @if($errors->has('address'))
                                    <small id="helpId" class="form-text text-danger">
                                        {{$errors->first('address')}}
                                    </small>
                                @endif
                                <label class="fieldlabels">Email: *</label>
                                <input type="text" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"/>
                                @if($errors->has('email'))
                                    <small id="helpId" class="form-text text-danger">
                                        {{$errors->first('email')}}
                                    </small>
                                @endif
                                <label class="fieldlabels">Số điện thoại: *</label>
                                <input type="text" class="form-control  {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"/>
                                @if($errors->has('phone'))
                                    <small id="helpId" class="form-text text-danger">
                                        {{$errors->first('phone')}}
                                    </small>
                                @endif
                            </div>
                            <button type="submit"  class=" action-button" >Xác nhận</button>
                            <button type="button" name="previous" class="previous action-button-previous" >Quay lại</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
