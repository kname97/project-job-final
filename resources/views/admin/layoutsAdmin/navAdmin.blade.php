<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <i class="fas fa-bars" id="menu-toggle"></i>

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        @if (Auth::check())
        <li class="nav-item dropdown">
            <a class="nav-link text-capitalize" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::user()->username}}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">
                    <i class="far fa-user-circle"></i>
                        Thông tin tài khoản
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('adminLogout') }}">
                    <i class="fas fa-sign-out-alt"></i>
                    Đăng xuất
                </a>
            </div>
        </li>
        @else
        <li class="nav-item ">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">
                Đăng nhập
            </a>
        </li>
                @endif
     </ul>
   </div>
 </nav>
