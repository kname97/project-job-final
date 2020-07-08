@extends('layouts.master')
@section('title','Trang đăng tin tuyển dụng')
@section('content')
    <div class="background-intro ">
        <div class="content-intro ">
            <div class="text-white text-center px-4">
                <h1 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Chào mừng các nhà tuyển dụng đã tìm đến
                        website của chúng tôi
                    </strong></h1>
                <p class=" mb-5">Tại đây các nhà tuyển dụng có thể dễ dàng đăng tin, dễ dàng tìm kiếm các ứng cử viên phù hợp
                    với yêu cầu và mục đích.
                </p>
                <div class="go-to-post text-center">
                    <button class="btn btn-lg btn-primary">
                        <a href="{{route('getPostJob')}}">ĐĂNG TIN TUYỂN DỤNG</a>
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection
