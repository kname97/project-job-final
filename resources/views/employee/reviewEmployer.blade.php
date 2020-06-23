@extends('layouts.master')
@section('title','Đánh giá nhà tuyển dụng')
@section('content')
    <div class="container content-child">
        <h1 class="text-uppercase text-center title-h1">Đánh giá nhà tuyển dụng</h1>
        @include('form.formFindJob')
        <div class="list-company">
            <nav class="navbar navbar-expand-lg  border">
                <div class="container">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse"  id="navbarText">
                        <ul class="navbar-nav">
                            <li> <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i>  Home</a></li>
                            <li> <a class="nav-link" href="#"><i class="fa fa-file-text" aria-hidden="true"></i>  About</a></li>
                            <li>
                                <a class="nav-link" href="#"><i class="fa fa-sticky-note" aria-hidden="true"></i>  Historical </a>
                            </li>
                        </ul>
                    </div></div>
            </nav>
        </div>

    </div>

    </div>

@endsection
