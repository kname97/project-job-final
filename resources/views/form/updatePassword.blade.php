@if(Auth::check())
{{--    @if(Auth::user()->level == 1)<form method="POST" action="{{route('updatePassword')}}">--}}
{{--    @elseif(Auth::user()->level == 2)<form method="POST">--}}
{{--    @else<form method="POST" >--}}
{{--    @endif--}}
                <form id="form-update-password" method="POST" action="{{route('updatePassword')}}">
                    @csrf
{{--        <input type="hidden" name="user_id_password" value="{{Auth::user()->id}}">--}}
        <div class="form-group row">
            <label class="col-lg-3 col-form-label fPOSTorm-control-label">Mật khẩu</label>
            <div class="col-lg-9">
                <input class="form-control {{ $errors->has('new_password') ? ' is-invalid' : '' }}" type="password" name="new_password" >
            </div>
            @if($errors->has('new_password'))
                <small id="helpId" class="form-text text-danger col-md-9 offset-md-3 ">
                    {{$errors->first('new_password')}}
                </small>
            @endif
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Xác nhận mật khẩu</label>
            <div class="col-lg-9">
                <input class="form-control {{ $errors->has('new_password') ? ' is-invalid' : '' }}" type="password" name="new_password_confirmation">
            </div>
            @if($errors->has('new_password'))
                <small id="helpId" class="form-text text-danger col-md-9 offset-md-3 ">
                    {{$errors->first('new_password')}}
                </small>
            @endif
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label"></label>
            <div class="col-lg-9">
                <input type="reset" class="btn btn-secondary" value="Hủy">
                <input type="submit" class="btn btn-primary" value="Lưu">
            </div>
        </div>
    </form>

    @endif