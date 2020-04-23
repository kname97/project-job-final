<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">JOBs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
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
            <span class="navbar-text">
                <a href="#" class="nav-link" >
                   Tuyển dụng
                </a>
            </span>
            <span class="navbar-text">
                <a href="#" class="nav-link" >
                    Việc làm
                </a>
            </span>
            <span class="navbar-text">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">
                    Đăng nhập
                </a>
            </span>
        </div>
    </nav>
</header>

@include('form.login')
