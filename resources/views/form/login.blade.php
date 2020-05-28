<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title "> <i class="fas fa-sign-in-alt"></i> Đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>


                </div>
                    {{-- <div class="login-social">
                        <button type="button" class="loginBtn loginBtn--facebook disabled">
                          <a href="#" class="text-light">Đăng nhập với Facebook</a>
                        </button>
                        <button type="button" class="loginBtn loginBtn--google disabled">
                          <a href="#" class="text-light">Đăng nhập với Google </a>
                        </button>
                        <span>Hoặc</span>
                         <hr>
                    </div> --}}
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group">
                        <div class="alert alert-success text-center error errorLogin"  >

                        </div>
                    </div>
                  <form class="form" role="form" id="formLogin" novalidate="" method="post">
                    @csrf
                    <div class="form-group">
                    <a href="{{url('/dang-ky')}}" class="float-right">Chưa có tài khoản ?</a>
                        <label for="uname1">Tên tài khoản</label>
                        <input type="text" class="form-control " name="email" id="txtemail" required="">

                        <small id="helpId" class="form-text text-danger error errorEmail">

                        </small>

                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control " name='password' id="txtpassword" required="">

                        <small id="helpId" class="form-text text-danger error errorPassword">

                        </small>

                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                      <label class="custom-control-label" for="remember">Ghi nhớ</label>
                    </div>
                    <div class="form-group modal-footer" >
                        <button type="submit" class="btn btn-info" id="loginSubmit">Đăng nhập</button>
                        <button type="button" class="btn btn-outline-secondary " data-dismiss="modal" aria-hidden="true">Hủy bỏ</button>

                    </div>

                </form>
                </div>
              </div>
        </div>
    </div>
</div>
