@extends('layouts.master')
@section('title','Bảng xếp hạng nhà tuyển dụng')
@section('content')
    <div class="container content-child">
        <h1 class="text-uppercase text-center title-h1">Bảng xếp hạng nhà tuyển dụng</h1>
        <div class="search-content">
            <h4> Tìm kiếm các công việc cần thiết</h4>
            <div class="search-content-background">
                @include('form.formFindJob')
            </div>
        </div>
        <small>Bảng xếp hạng dựa trên lượt yêu thích của người tìm việc *</small>
        <div class="row m-md-3">
            @foreach($ranks as $rank)
                <div class="col-4 pt-3">
                    <a class="top-company" href="{{route('general.getProfileEmployer',$rank->employer_id)}}">
                        <div class=" top-company__logo text-center">
                            <img alt="{{$rank->name}}" class=" lazyloaded"
                                 src="{{asset($rank->avatar)}}" style="width: 100%">
                        </div>
                        <div class="top-company__name text-center">{{$rank->name}}</div>
                        <footer class="top-company__footer text-center">
                        <span class="top-company__footer-jobs">
                        </span>
                            <span class="top-company__footer-city">{{$rank->address}}, {{$rank->district}}, {{$rank->city}}</span>
                        </footer>
                    </a>
                </div>
            @endforeach


        </div>

    </div>
@endsection
