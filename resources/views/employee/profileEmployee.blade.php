@extends("layouts.master")
@section('title')
    Thông tin cá nhân
    {{$employees->username}}
@endsection
@section('content')
    @if ($errors->any())
        <div class=”alert alert-danger”>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid content-child">
        <div class=" container-fluid">
            <div class="row">
                <div class="col-3">
                    @include('layouts.menuLeft')
                </div>
                <div class="col-9 change-content-click">
                    <div class="profile-img">
                        @include('form.imageProfile')
                    </div>
                    <div class="profile-detail">
                        <div class="row my-2">
                            <div class="col-12 order-lg-2">
                                <ul class="nav nav-tabs" id="tab-profile">
                                    <li class="nav-item">
                                        <a href="#profile" data-target="#profile" data-toggle="tab" class="nav-link ">Thông tin cá
                                            nhân</a>
                                    </li>
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
                                    <div class="tab-pane " id="profile">
                                        <h5 class="mb-3">Thông tin cá nhân</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Trường đại học</h6>
                                                <p>
                                                    {{$profileEmployees->university !== null ? $profileEmployees->university : '' }}
                                                </p>
                                                <p>
                                                    {{$profileEmployees->lastname !== null ?
                                                    $profileEmployees->lastname
                                                  :
                                                    '' }}
                                                    {{$profileEmployees->firstname !== null ?
                                                   $profileEmployees->firstname
                                                 :
                                                   '' }}
                                                </p>
                                                <p>
                                                    {{$profileEmployees->dob !== null ?
                                                    $profileEmployees->dob
                                                  :
                                                    '' }}
                                                </p>
                                                <p>
                                                    {{$profileEmployees->address !== null ?
                                                    $profileEmployees->address
                                                  :
                                                    '' }},
                                                    {{$profileEmployees->district !== null ?
                                                   $profileEmployees->district
                                                 :
                                                   '' }} ,
                                                    {{$profileEmployees->city !== null ?
                                                   $profileEmployees->city
                                                 :
                                                   '' }}
                                                </p>
                                                <p>
                                                    {{$profileEmployees->phone !== null ?
                                                    $profileEmployees->phone
                                                  :
                                                    '' }}
                                                </p>
                                                <p>
                                                    {{$employees->email !== null ?
                                                    $employees->email
                                                  :
                                                    '' }}
                                                </p>



                                            </div>
                                            <div class="col-md-6">
                                                <h6>Chuyên ngành</h6>
                                                <a href="#" class="badge badge-dark badge-pill">{{$profileEmployees->tag_skill
                                                !== null ? $profileEmployees->tag_skill : '' }}</a>
                                                <hr>
                                                {{--                                                <span class="badge badge-primary"><i class="fa fa-user"></i> 9 Nhà tuyển dụng yêu thích</span>--}}
                                                {{--                                                <span class="badge badge-danger"><i--}}
                                                {{--                                                            class="fa fa-eye"></i> 5 Đơn xin việc đã nộp</span>--}}
                                            </div>
                                            {{--                                            <div class="col-md-12">--}}
                                            {{--                                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Hoạt--}}
                                            {{--                                                    động gần đây</h5>--}}
                                            {{--                                                <table class="table table-sm table-hover table-striped">--}}
                                            {{--                                                    <tbody>--}}
                                            {{--                                                    <tr>--}}
                                            {{--                                                        <td>--}}
                                            {{--                                                            <strong>Công ty A</strong> đã được thêm vào danh sách yêu thích.--}}
                                            {{--                                                        </td>--}}
                                            {{--                                                    </tr>--}}
                                            {{--                                                    <tr>--}}
                                            {{--                                                        <td>--}}
                                            {{--                                                            <strong>Công ty B</strong> đã được thêm vào danh sách yêu thích.--}}
                                            {{--                                                        </td>--}}
                                            {{--                                                    </tr>--}}
                                            {{--                                                    <tr>--}}
                                            {{--                                                        <td>--}}
                                            {{--                                                            <strong>Công ty C</strong> đã được thêm vào danh sách yêu thích.--}}
                                            {{--                                                        </td>--}}
                                            {{--                                                    </tr>--}}
                                            {{--                                                    <tr>--}}
                                            {{--                                                        <td>--}}
                                            {{--                                                            Bạn đã nộp đơn xin việc vào <strong>Công ty D</strong>--}}
                                            {{--                                                        </td>--}}
                                            {{--                                                    </tr>--}}
                                            {{--                                                    <tr>--}}
                                            {{--                                                        <td>--}}
                                            {{--                                                            Bạn đã nộp đơn xin việc vào <strong>Công ty E</strong>--}}
                                            {{--                                                        </td>--}}
                                            {{--                                                    </tr>--}}
                                            {{--                                                    </tbody>--}}
                                            {{--                                                </table>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <div class="tab-pane" id="messages">
                                       <h4> mô tả bản thân </h4>
                                        <div class="des" style="background: #fff8b3;padding: 20px 20px">
                                            @if($profileEmployees->description)
                                               {!!$profileEmployees->description!!}
                                            @endif
                                        </div>

                                    </div>
                                    <div class="tab-pane active" id="edit">
                                        <form id="form-create-profile" method="POST" action="{{ route('updateProfile',
                                        ['id'=>$employees->id])
                                        }}">
                                            @csrf
                                            <input type="hidden" name="employee_id" value="{{$profileEmployees->id}}">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Tên <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control {{ $errors->has('txtfirstname') ? ' is-invalid' : '' }} "
                                                           name="txtfirstname" type="text"
                                                           value="{{$profileEmployees->firstname !== null ? $profileEmployees->firstname : ''
                                                           }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Họ ( bao gồm tên lót)
                                                    <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control {{ $errors->has('txtlastname') ? ' is-invalid' :
                                                     '' }} " name="txtlastname" type="text" value="{{$profileEmployees->lastname
                                                     !==
                                                     null ? $profileEmployees->lastname : ''
                                                           }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Số điện thoại
                                                    <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control {{ $errors->has('txtphone') ? ' is-invalid' : ''
                                                     }} " name="txtphone" type="text" value="{{$profileEmployees->phone
                                                     !==
                                                     null ? $profileEmployees->phone : ''
                                                           }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control " name="txtemail" type="email"
                                                           value="{{$employees->email}}"
                                                           disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control " name="txtusername" type="text"
                                                           value="{{$employees->username}}"
                                                           disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">giới tính <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <select id="gender" name="gender" class="form-control" size="0">
                                                        <option value="nam" {{$profileEmployees->gender == 'nam' ? 'selected': ''}}>
                                                            Nam
                                                        </option>
                                                        <option value="nữ" {{$profileEmployees->gender == 'nữ' ? 'selected':
                                                        ''}}>Nữ
                                                        </option>
                                                        <option value="không xác định"{{$profileEmployees->gender == 'không xác định' ? 'selected': ''}}>
                                                            không xác định
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">kỹ năng</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control " name="txttag_skill" type="text"
                                                           value="{{$profileEmployees->tag_skill !== null ?
                                                           $profileEmployees->tag_skill: ''}}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Trường đại học</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control " name="txtuniversity" type="text"
                                                           value="{{$profileEmployees->university !== null ?
                                                           $profileEmployees->university: ''}}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Ngày sinh <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control {{ $errors->has('txtdob') ? ' is-invalid' : '' }}"
                                                           name="txtdob" type="date"
                                                           value="{{$profileEmployees->dob !== null ? $profileEmployees->dob: ''}}"
                                                           placeholder="Ngày sinh">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Miêu tả </label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control rounded-0" id="description-profile"
                                                              name="txtdescription"
                                                              rows="10">{{$profileEmployees->description !== null ?
                                                              $profileEmployees->description: ''}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Địa chỉ <span
                                                            class="require-field">*</span></label>

                                                <div class="col-lg-6">
                                                    <input class="form-control {{ $errors->has('txtcity') ? ' is-invalid' : ''
                                                    }}" name="txtcity" type="text" value="{{$profileEmployees->city !==
                                                    null ? $profileEmployees->city: ''}}"
                                                           placeholder="Thành Phố / Tỉnh ">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class="form-control {{ $errors->has('txtdistrict') ? ' is-invalid' : ''
                                                    }}" type="text" name="txtdistrict" value="{{$profileEmployees->district
                                                     !==
                                                    null ? $profileEmployees->district: ''}}" placeholder="Quận / Huyện">
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control {{ $errors->has('txtaddress') ? ' is-invalid' : ''
                                                    }}" name="txtaddress" type="text"
                                                           value="{{$profileEmployees->address
                                                     !==
                                                    null ? $profileEmployees->address: ''}}"
                                                           placeholder="Tên đường">
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
