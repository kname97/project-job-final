<header>
    <nav class="navbar navbar-expand-lg bg-white ">
        <a class="navbar-brand" href="{{url('/')}}">JOBs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <form class="navbar-form navbar-left" action="/action_page.php">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
            @if(Auth::check())
                @if(Auth::user()->level == 1)
                    <span class="navbar-text">
                        <a href="#" class="nav-link">
                            Việc làm
                        </a>
                    </span>

                @elseif(Auth::user()->level == 2)
                    <span class="navbar-text">
                        <a href="{{route('getPostJob')}}" class="nav-link">
                           Tuyển dụng
                        </a>
                    </span>

                @endif
                {{--                    <li class="nav-item dropdown">--}}
                <a class="nav-link text-capitalize dropdown" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVudfcgyMsEWu1ibVhe1TV5fgIURljQMDslLFN4HyEwNSWqdnm&usqp=CAU"
                        alt="Avatar" class="avatar-header">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="far fa-user-circle"></i>
                        Thông tin tài khoản
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/dang-xuat') }}">
                        <i class="fas fa-sign-out-alt"></i>
                        Đăng xuất
                    </a>
                </div>
                {{--                      </li>--}}
            @else
                <span class="navbar-text">
                        <a href="#" class="nav-link">
                            Việc làm
                        </a>
                    </span>
                <span class="navbar-text">
                        <a href="{{route('getPostJob')}}" class="nav-link">
                           Tuyển dụng
                        </a>
                    </span>
                <span class="navbar-text">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">
                    Đăng nhập
                </a>
            </span>
            @endif


        </div>
    </nav>
</header>

@include('form.login')
