@extends('layouts.master')
@section('title','Trang đăng tin tuyển dụng')
@section('content')
    <div class="container">
        <div class="row justify-content-center content-post-jobs ">
            <div class="col-12 ">
                <div class="card px-5 pt-5">
                    <h2 id="heading">Đăng tin tuyển dụng</h2>
                    <form id="msform">
                        <!-- progressbar -->
                        <input type="hidden" value="{{auth()->user()->id}}">
                        <div id="progressbar">
                            <li class="active" id="basic"><strong>Thông tin cơ bản</strong></li>
                            <li id="detail"><strong>Nội dung chi tiết</strong></li>
                            <li id="company"><strong>Thông tin liên hệ</strong></li>
                            <li id="confirm"><strong>Hoàng thành</strong></li>
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
                                <input type="text" name="title-job" class="title-job form-control"
                                       placeholder="Tiêu đề đơn tuyển dụng"/>
                                <label class="fieldlabels">Trực thuộc: *</label>
                                <div class="input-group mb-3">

                                    <select class="custom-select" name="select-categoryJob" id="select-categoryJob">
                                        <option value=""></option>
                                        @foreach($jobCategory as $cateJob)
                                            <option value="{{$cateJob->id}}">{{$cateJob->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <label class="fieldlabels">Mô tả : </label>
                                <textarea class="form-control rounded-0" id="description-postjob" rows="10"></textarea>
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
                                    <select class="type-job input-group form-control" name="type-job" id="type-job">
                                        <option selected>Chọn...</option>
                                        <option value="1">Bán thời gian</option>
                                        <option value="2">Toàn thời gian</option>
                                        <option value="3">Thực tập</option>
                                        <option value="3">Freelancer</option>
                                    </select>
                                </div>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label class="fieldlabels"> Lương tối thiểu :</label>
                                        <input class=" form-control  " type="text" name="minsalary" id="minsalary" >
                                    </div>
                                    <div class="form-group">
                                        <label class="fieldlabels mx-sm-5"> Lương tối đa :</label>
                                        <input class=" form-control mx-sm-5" type="text" name="maxsalary" id="maxsalary" >
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="negotiable" id="negotiable">
                                        <label class="custom-control-label" for="negotiable">Thỏa thuận</label>
                                    </div>
                                </div>
                                <label class="fieldlabels">Ngày bắt đầu : *</label>
                                <input type="text" class="form-control" name="companyname" />
                                <label class="fieldlabels">Ngày kết thúc : *</label>
                                <input type="text" class="form-control" name="companyname"/>
                                <label class="fieldlabels">Số lượng cần tuyển: *</label>
                                <input type="number" class="form-control" name="number-employee"/>
                                <label class="fieldlabels">Chức vụ: *</label>
                                <input type="text" class="form-control" name="position" placeholder="Tên chức vụ"/>
                                <label class="fieldlabels">Yêu cầu kinh nghiệm: *</label>
                                <input type="number" name="exp"/>
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
                                <label class="fieldlabels">Địa chỉ : *</label>
                                <input type="text" class="form-control" name="address"/>
                                <label class="fieldlabels">Email: *</label>
                                <input type="number" class="form-control" name="email"/>
                                <label class="fieldlabels">Số điện thoại: *</label>
                                <input type="number" class="form-control" name="phone"/>
                            </div>
                            <<button type="button" name="next" class="next action-button" >Submit</button>
                            <button type="button" name="previous" class="previous action-button-previous" >Quay lại</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <br><br>
                                <h2 class="purple-text text-center"><strong>THÀNH CÔNG !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"><img src="https://i.imgur.com/GwStPmg.png" class="fit-image">
                                    </div>
                                </div>
                                <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">Đăng tin tuyển dụng thành công</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
