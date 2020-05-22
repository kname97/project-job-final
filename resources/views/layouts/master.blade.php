<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOBs | @yield('title')</title>
    <script src="{{asset('js/general/font.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/general/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general/dataTables.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body class=" bg-light">
@include('layouts.header')
@if(session('atention'))
    <div class="alert alert-danger text-center alert-dismissible fade show" style="margin-bottom: 0px !important" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong >
            {{session('atention')}}
        </strong>
    </div>
@endif
<div class="wrapper">
    @yield('content')
</div>
@include('layouts.footer')
{{-- script boostrap  --}}
<script src="{{asset('js/general/slim.min.js')}}" ></script>
<script src="{{asset('js/general/popper.min.js')}}" ></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/general/jquery.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/general/dataTable.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('js/general/scripts.js') }}"></script>
</body>
</html>
