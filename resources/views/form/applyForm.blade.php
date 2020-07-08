<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title "> <i class="fas fa-sign-in-alt"></i> gữi thông tin ứng tuyển</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group">
                        <div class="alert text-center error errorLogin"  >

                        </div>
                    </div>
                    <form class="form" role="form" id="apply" novalidate="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="uname1">email</label>
                            <input type="email" class="form-control " name="email" id="txtemail" required>
                            <small id="helpId" class="form-text text-danger error errorEmail">
                            </small>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" class="form-control " name='phone' id="phone" required="">
                            <small id="helpId" class="form-text text-danger error errorPassword">
                            </small>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" class="form-control " name='phone' id="phone" required="">
                            <small id="helpId" class="form-text text-danger error errorPassword">
                            </small>
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
