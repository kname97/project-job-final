@extends("layouts.master")
@section('title', "Trang cá nhân của asdsadsads")
@section('content')
    <div class="container">
        <div class="container user-profile-image">
           @include("form.imageProfile")
        </div>
        <div class="container">
            <div class="text-center  user-profile-intro">
                <h2 >Lê Quốc Khánh</h2>
                <h6 >23 tuổi</h6>
                <h6 >Đại học Công Nghiệp TPHCM</h6>
                <h6 >Hệ Thống Thông Tin</h6>
                <h6 >PHP developer</h6>
                <a href="#" class="badge badge-dark badge-pill">html5</a>
                <a href="#" class="badge badge-dark badge-pill">css3</a>
                <a href="#" class="badge badge-dark badge-pill">jquery</a>
                <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                <a href="#" class="badge badge-dark badge-pill">PHP</a>
            </div>
            <div class=" user-profile-detail">

            </div>
        </div>
    </div>
@endsection
