@extends('layouts.master')
@section('title','Đánh giá nhà tuyển dụng')
@section('content')
    <div class="container content-child">
        <h1 class="text-uppercase text-center title-h1">Đánh giá nhà tuyển dụng</h1>
        @include('form.formFindJob')
    </div>
        <div class="container-fluid">

            <div class="row">
                <div class="col-3">
                    @include('layouts.menuLeft')
                </div>
                <div class="col-9">

                </div>
        </div>
@endsection
