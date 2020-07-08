@extends("layouts.master")
@section('title')
    Thông tin cá nhân
    {{$employers->username}}
@endsection
@section('content')
    <div class="container-fluid content-child">
        <div class=" container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="text-center">
                        <form id="employer_avatar_save_form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class=" avatar img-size"  id="user_avatar_emloyer"
                                 style="background-image: url('{{ $profileEmployers->avatar == null ? asset('images/avartar/avatar_default.png') :asset($profileEmployers->avatar) }}');
                                         margin-left: 110px;">
                            </div>
                            <h6 style="color: silver">Đăng ảnh đại hiện ( khuyến khích ảnh vuông )</h6>
                            <input onchange="doAfterSelectAvatarEmployer(this)" type="file" class="text-center center-block
                            file-upload" name="avatar"  id="upload-avatar-employer" hidden>
                            <label class="btn btn-success" for="upload-avatar-employer" >Tải ảnh</label>
                        </form>

                    </div>

                </div>
                <div class="col-9 change-content-click">
                    <div class="profile-detail">
                        <div class="row my-2">
                            <div class="col-12 order-lg-2">
                                <ul class="nav nav-tabs" id="tab-profile">
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#profile" data-target="#profile" data-toggle="tab" class="nav-link ">Thông tin cá--}}
{{--                                            nhân</a>--}}
{{--                                    </li>--}}
                                    <li class="nav-item">
                                        <a href="#messages" data-target="#messages" data-toggle="tab" class="nav-link">Thông
                                            báo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#edit" data-target="#edit" data-toggle="tab" class="nav-link active">Chỉnh
                                            sửa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#edit-password" data-target="#edit-password" data-toggle="tab" class="nav-link">
                                            Thay đổi mật khẩu</a>
                                    </li>
                                </ul>
                                <div class="tab-content py-4">
{{--                                    <div class="tab-pane " id="profile">--}}
{{--                                        <h5 class="mb-3">Thông tin cá nhân</h5>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <h6>Trường đại học</h6>--}}
{{--                                                <p>--}}
{{--                                                    {{$profileEmployers->university !== null ? $profileEmployers->university : '' }}--}}
{{--                                                </p>--}}
{{--                                                <p>--}}
{{--                                                    {{$profileEmployers->lastname !== null ?--}}
{{--                                                    $profileEmployers->lastname--}}
{{--                                                  :--}}
{{--                                                    '' }}--}}
{{--                                                    {{$profileEmployers->firstname !== null ?--}}
{{--                                                   $profileEmployers->firstname--}}
{{--                                                 :--}}
{{--                                                   '' }}--}}
{{--                                                </p>--}}
{{--                                                <p>--}}
{{--                                                    {{$profileEmployers->dob !== null ?--}}
{{--                                                    $profileEmployers->dob--}}
{{--                                                  :--}}
{{--                                                    '' }}--}}
{{--                                                </p>--}}
{{--                                                <p>--}}
{{--                                                    {{$profileEmployers->address !== null ?--}}
{{--                                                    $profileEmployers->address--}}
{{--                                                  :--}}
{{--                                                    '' }},--}}
{{--                                                    {{$profileEmployers->district !== null ?--}}
{{--                                                   $profileEmployers->district--}}
{{--                                                 :--}}
{{--                                                   '' }} ,--}}
{{--                                                    {{$profileEmployers->city !== null ?--}}
{{--                                                   $profileEmployers->city--}}
{{--                                                 :--}}
{{--                                                   '' }}--}}
{{--                                                </p>--}}
{{--                                                <p>--}}
{{--                                                    {{$profileEmployers->phone !== null ?--}}
{{--                                                    $profileEmployers->phone--}}
{{--                                                  :--}}
{{--                                                    '' }}--}}
{{--                                                </p>--}}
{{--                                                <p>--}}
{{--                                                    {{$employees->email !== null ?--}}
{{--                                                    $employees->email--}}
{{--                                                  :--}}
{{--                                                    '' }}--}}
{{--                                                </p>--}}



{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <h6>Chuyên ngành</h6>--}}
{{--                                                <a href="#" class="badge badge-dark badge-pill">{{$profileEmployers->tag_skill--}}
{{--                                                !== null ? $profileEmployers->tag_skill : '' }}</a>--}}
{{--                                                <hr>--}}
{{--                                                                                                <span class="badge badge-primary"><i class="fa fa-user"></i> 9 Nhà tuyển dụng yêu thích</span>--}}
{{--                                                                                                <span class="badge badge-danger"><i--}}
{{--                                                                                                            class="fa fa-eye"></i> 5 Đơn xin việc đã nộp</span>--}}
{{--                                            </div>--}}
{{--                                                                                        <div class="col-md-12">--}}
{{--                                                                                            <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Hoạt--}}
{{--                                                                                                động gần đây</h5>--}}
{{--                                                                                            <table class="table table-sm table-hover table-striped">--}}
{{--                                                                                                <tbody>--}}
{{--                                                                                                <tr>--}}
{{--                                                                                                    <td>--}}
{{--                                                                                                        <strong>Công ty A</strong> đã được thêm vào danh sách yêu thích.--}}
{{--                                                                                                    </td>--}}
{{--                                                                                                </tr>--}}
{{--                                                                                                <tr>--}}
{{--                                                                                                    <td>--}}
{{--                                                                                                        <strong>Công ty B</strong> đã được thêm vào danh sách yêu thích.--}}
{{--                                                                                                    </td>--}}
{{--                                                                                                </tr>--}}
{{--                                                                                                <tr>--}}
{{--                                                                                                    <td>--}}
{{--                                                                                                        <strong>Công ty C</strong> đã được thêm vào danh sách yêu thích.--}}
{{--                                                                                                    </td>--}}
{{--                                                                                                </tr>--}}
{{--                                                                                                <tr>--}}
{{--                                                                                                    <td>--}}
{{--                                                                                                        Bạn đã nộp đơn xin việc vào <strong>Công ty D</strong>--}}
{{--                                                                                                    </td>--}}
{{--                                                                                                </tr>--}}
{{--                                                                                                <tr>--}}
{{--                                                                                                    <td>--}}
{{--                                                                                                        Bạn đã nộp đơn xin việc vào <strong>Công ty E</strong>--}}
{{--                                                                                                    </td>--}}
{{--                                                                                                </tr>--}}
{{--                                                                                                </tbody>--}}
{{--                                                                                            </table>--}}
{{--                                                                                        </div>--}}
{{--                                        </div>--}}
{{--                                        <!--/row-->--}}
{{--                                    </div>--}}
                                    <div class="tab-pane" id="messages">
                                        <h4> mô tả bản thân </h4>
                                        <div class="des" style="background: #fff8b3;padding: 20px 20px">
                                            @if($profileEmployers->description)
                                                {!!$profileEmployers->description!!}
                                            @endif
                                        </div>

                                    </div>
                                    <div class="tab-pane active" id="edit">
                                        <form id="form-create-profile" method="POST" action="{{ route('updateEmployer',
                                        ['id'=>$employers->id])
                                        }}">
                                            @csrf
                                            <input type="hidden" name="employee_id" value="{{$profileEmployers->id}}">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Tên công ty <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control {{ $errors->has('txtname') ? ' is-invalid' : '' }} "
                                                           name="txtname" type="text"
                                                           value="{{$profileEmployers->name !== null ?
                                                           $profileEmployers->name : ''
                                                           }}">
                                                    @if($errors->has('txtname'))
                                                        <small id="helpId" class="form-text text-danger">
                                                            {{$errors->first('txtname')}}
                                                        </small>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Lĩnh vực kinh doanh
                                                    công ty
                                                    <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control {{ $errors->has('business_sector') ? ' is-invalid' :
                                                     '' }} " name="business_sector" type="text" value="{{$profileEmployers->business_sector
                                                     !==
                                                     null ? $profileEmployers->business_sector : ''
                                                           }}">
                                                    @if($errors->has('business_sector'))
                                                        <small id="helpId" class="form-text text-danger">
                                                            {{$errors->first('business_sector')}}
                                                        </small>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Số điện thoại
                                                    <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control {{ $errors->has('txtphone') ? ' is-invalid' : ''
                                                     }} " name="txtphone" type="text" value="{{$profileEmployers->phone
                                                     !== null ? $profileEmployers->phone : ''}}">
                                                    @if($errors->has('txtphone'))
                                                        <small id="helpId" class="form-text text-danger">
                                                            {{$errors->first('txtphone')}}
                                                        </small>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control " name="txtemail" type="email"
                                                           value="{{$employers->email}}"
                                                           disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control " name="txtusername" type="text"
                                                           value="{{$employers->username}}"
                                                           disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">skype</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control {{ $errors->has('txtskype') ? ' is-invalid' : ''
                                                     }} " name="txtskype" type="text"
                                                           value="{{$profileEmployers->skype !== null ?
                                                           $profileEmployers->skype: ''}}"
                                                    >
                                                    @if($errors->has('txtskype'))
                                                        <small id="helpId" class="form-text text-danger">
                                                            {{$errors->first('txtskype')}}
                                                        </small>
                                                    @endif
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Miêu tả công ty </label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control rounded-0" id="description-employer"
                                                              name="description"
                                                              rows="10">{{$profileEmployers->description !== null ?
                                                              $profileEmployers->description: ''}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Địa chỉ <span
                                                            class="require-field">*</span></label>

                                                <div class="col-lg-6">
                                                    <input class="form-control {{ $errors->has('txtcity') ? ' is-invalid' : ''
                                                    }}" name="txtcity" type="text" value="{{$profileEmployers->city !==
                                                    null ? $profileEmployers->city: ''}}"
                                                           placeholder="Thành Phố / Tỉnh ">
                                                    @if($errors->has('txtcity'))
                                                        <small id="helpId" class="form-text text-danger">
                                                            {{$errors->first('txtcity')}}
                                                        </small>
                                                    @endif
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class="form-control {{ $errors->has('txtdistrict') ? ' is-invalid' : ''
                                                    }}" type="text" name="txtdistrict" value="{{$profileEmployers->district
                                                     !==
                                                    null ? $profileEmployers->district: ''}}" placeholder="Quận / Huyện">
                                                    @if($errors->has('txtdistrict'))
                                                        <small id="helpId" class="form-text text-danger">
                                                            {{$errors->first('txtdistrict')}}
                                                        </small>
                                                    @endif
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control {{ $errors->has('txtaddress') ? ' is-invalid' : ''
                                                    }}" name="txtaddress" type="text"
                                                           value="{{$profileEmployers->address
                                                     !==
                                                    null ? $profileEmployers->address: ''}}"
                                                           placeholder="Tên đường">
                                                    @if($errors->has('txtaddress'))
                                                        <small id="helpId" class="form-text text-danger">
                                                            {{$errors->first('txtaddress')}}
                                                        </small>
                                                    @endif
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <input type="reset" class="btn btn-secondary" value="Hủy">
                                                    <input type="submit" class="btn btn-primary" value="Lưu">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane " id="edit-password">
                                        @include('form.updatePassword')
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
