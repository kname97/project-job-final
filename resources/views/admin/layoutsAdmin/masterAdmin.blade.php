<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="crsf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOBs | @yield('title')</title>
    <script src="{{asset('js/general/font.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general/style.css') }}">
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general/dataTables.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/general/select2.min.css')}}">
    @toastr_css
</head>
<body>
<div class="d-flex" id="wrapper-toggle">

    <!-- Sidebar -->
@include('admin.layoutsAdmin.leftMenuAdmin')
<!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        @include('admin.layoutsAdmin.navAdmin')


        <div class="container-fluid">
            <div id="wrapper">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">@yield('breadcrumd')</li>
                </ol>
                @yield('content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

</div>

{{-- script boostrap  --}}

@routes()
<script src="{{asset('js/general/jquery.min.js')}}"></script>
<script src="{{asset('js/general/slim.min.js')}}"></script>
<script src="{{asset('js/general/popper.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/general/dataTable.min.js')}}"></script>
<script src="{{asset('js/general/select2.full.min.js')}}"></script>
@toastr_js
@toastr_render
<!-- Menu Toggle Script -->
<script src="{{ asset('js/admin/admin.js') }}"></script>

</body>
</html>
