@extends('layouts.master')
@section('title','Danh sách yêu thích nhà tuyển dụng')
@section('content')
    <div class="container content-child">
        <h1 class="text-uppercase text-center title-h1">Danh sách nhà tuyển dụng yêu thích</h1>
        @include('form.formFindJob')
    </div>
@endsection
