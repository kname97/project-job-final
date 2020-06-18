@extends("layouts.master")
@section('title')
    Thông tin cá nhân
    {{$employee->username}}
@endsection
@section('content')

    <div class="container-fluid content-profile">
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
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link ">Thông tin cá nhân</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Thông báo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link active">Chỉnh sửa</a>
                                    </li>
                                </ul>
                                <div class="tab-content py-4">
                                    <div class="tab-pane " id="profile">
                                        <h5 class="mb-3">Thông tin cá nhân</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Chuyên ngành</h6>
                                                <p>
                                                    PHP developer
                                                </p>
                                                <h6>Sở thích</h6>
                                                <p>
                                                    Âm nhạc, du lịch, ...
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Kỹ năng</h6>
                                                <a href="#" class="badge badge-dark badge-pill">html5</a>
                                                <a href="#" class="badge badge-dark badge-pill">css3</a>
                                                <a href="#" class="badge badge-dark badge-pill">jquery</a>
                                                <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                                                <a href="#" class="badge badge-dark badge-pill">PHP</a>
                                                <hr>
                                                <span class="badge badge-primary"><i class="fa fa-user"></i> 9 Nhà tuyển dụng yêu thích</span>
                                                <span class="badge badge-danger"><i class="fa fa-eye"></i> 5 Đơn xin việc đã nộp</span>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Hoạt động gần đây</h5>
                                                <table class="table table-sm table-hover table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <strong>Công ty A</strong> đã được thêm vào danh sách yêu thích.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Công ty B</strong> đã được thêm vào danh sách yêu thích.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Công ty C</strong> đã được thêm vào danh sách yêu thích.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Bạn đã nộp đơn xin việc vào <strong>Công ty D</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Bạn đã nộp đơn xin việc vào <strong>Công ty E</strong>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <div class="tab-pane" id="messages">
                                        <div class="alert alert-info alert-dismissable">
                                            <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to
                                            show important messages to the user.
                                        </div>
                                        <table class="table table-hover table-striped">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">3 giờ trước</span> Công ty A đã xem đơn xin việc của
                                                    bạn.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">hôm qua</span> Công ty AA đã xem đơn xin việc của bạn..
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane active" id="edit">
                                        <form role="form">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{$employee->id}}">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Tên <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control txtfirstname" name="txtfirstname" type="text" value="Khánh">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Họ ( bao gồm tên lót) <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control txtlastname " name="txtlastname" type="text" value="Quốc Khánh">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control txtemail" name="txtemail" type="email" value="{{$employee->email}}"
                                                           disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control txtusername" name="txtusername" type="text"
                                                           value="{{$employee->username}}"
                                                           disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">giới tính <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <select id="gender" name="gender" class="form-control" size="0">
                                                        <option value="male">Nam</option>
                                                        <option value="female">Nữ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Ngày sinh <span
                                                            class="require-field">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control txtdob" name="txtdob" type="text" value="" placeholder="Ngày sinh">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Miêu tả </label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control rounded-0" id="description-profile" name="description-profile"
                                                              rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Địa chỉ <span
                                                            class="require-field">*</span></label>

                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" value="" placeholder="Thành Phố / Tỉnh ">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class="form-control" type="text" value="" placeholder="Quận / Huyện">
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control txtaddress" name="txtaddress" type="text" value=""
                                                           placeholder="Tên đường">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Mật khẩu</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="password" name="txtpassword" placeholder="để trống nếu không muốn đổi mật khẩu">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Xác nhận mật khẩu</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="password" name="txtpassword_confirmation">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <input type="reset" class="btn btn-secondary" value="Hủy">
                                                    <input type="button" class="btn btn-primary" value="Lưu">
                                                </div>
                                            </div>
                                        </form>
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
