<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOBs - Đăng nhập trang quản trị</title>
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/loginAdmin.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="login-form">
        <form action="{{ route('adminLogin') }}" method="post">
            @csrf
            <h2 class="text-center">Đăng nhập</h2>   
            @if($errors->has('errorloginadmin'))
            <div class="form-group">
                <div class="alert alert-danger " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{-- Đăng nhập không thành công --}}
                    {{$errors->first('errorloginadmin')}}
                </div>
            </div>
            @endif    
            <div class="form-group">
                <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} " placeholder="Email" name="email" aria-label="email" aria-describedby="helpId">
                @error('email') 
                    <small id="helpId" class="form-text text-danger">
                        {{$errors->first('email')}}
                    </small>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" aria-label="password" aria-describedby="basic-addon1">
                @error('password') 
                    <small id="helpId" class="form-text text-danger">
                        {{$errors->first('password')}}
                    </small> 
                @enderror
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
            </div>
            {{-- <div class="clearfix">
                <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                <a href="#" class="pull-right">Forgot Password?</a>
            </div>         --}}
        </form>
    </div>
            
    <script src="https://use.fontawesome.com/0ace143f25.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>