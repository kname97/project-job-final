@extends("layouts.master")
@section('title', "Trang cá nhân của ")
@section('content')
    <div class="container-fluid.,l">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class=" container-fluid">
            <div class="row">
                <div class="col-3">
                    @include('layouts.menuLeft')
                </div>
                <div class="col-9">
                    <div class="profile-img">
                        @include('form.imageProfile')
                    </div>
                    <div class="profile-detail">
                        @include('form.fieldProfile')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
