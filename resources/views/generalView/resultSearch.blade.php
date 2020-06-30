@extends('layouts.master')
@section('title',' Kết quả tìm kiếm')
@section('content')
    <div class="container content-child">
        <h1 class="text-uppercase text-center title-h1">Bảng xếp hạng nhà tuyển dụng</h1>
        <div class="search-content">
            <h4> Tìm kiếm các công việc cần thiết</h4>
            <div class="search-content-background">
                @include('form.formFindJob')
            </div>
        </div>
        <section id="list-jobs" class="top-jobs">
            <div class="container" id="feature-jobs">
                <div class="row">
                    <div class="col-12 feature-job">
                        <div class="feature-job-item">
                            <div class="row">
                                <div class="col-2 col-logo">
                                    <a href="">
                                        <div class="box-logo-search">
                                            <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg"
                                                 class="img-size" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-8 col-title">
                                    <div class="title">
                                        <span class="badge badge-danger">New</span>
                                        <a href="#" class="text-uppercase">tiêu đề cần tuyển tiêu đề cần tuyển tiêu đề cần
                                            tuyển</a>
                                    </div>
                                    <div class="job-company"><a href="#"> Tên công ty</a></div>
                                    <div class="job-deal">
                                        <div class="job-location"><i class="fas fa-map-marker-alt"></i> Hồ chí minh</div>
                                        <i class="fas fa-money-bill"></i> thỏa thuân
                                    </div>
                                </div>
                                <div class="col-2 col-btn">
                                    <button class="btn btn-danger">Lưu</button>
                                    <button class="btn btn-success">nộp đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 feature-job">
                        <div class="feature-job-item">
                            <div class="row">
                                <div class="col-2 col-logo">
                                    <a href="">
                                        <div class="box-logo-search">
                                            <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg"
                                                 class="img-size" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-8 col-title">
                                    <div class="title">
                                        <span class="badge badge-success">New</span>
                                        <a href="#" class="text-uppercase">tiêu đề cần tuyển tiêu đề cần tuyển tiêu đề cần
                                            tuyển</a>
                                    </div>
                                    <div class="job-company"><a href="#"> Tên công ty</a></div>
                                    <div class="job-deal">
                                        <div class="job-location"><i class="fas fa-map-marker-alt"></i> Hồ chí minh</div>
                                        <i class="fas fa-money-bill"></i> thỏa thuân
                                    </div>
                                </div>
                                <div class="col-2 col-btn">
                                    <button class="btn btn-danger">Lưu</button>
                                    <button class="btn btn-success">nộp đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 feature-job">
                        <div class="feature-job-item">
                            <div class="row">
                                <div class="col-2 col-logo">
                                    <a href="">
                                        <div class="box-logo-search">
                                            <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg"
                                                 class="img-size" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-8 col-title">
                                    <div class="title">
                                        <span class="badge badge-light">New</span>
                                        <a href="#" class="text-uppercase">tiêu đề cần tuyển tiêu đề cần tuyển tiêu đề cần
                                            tuyển</a>
                                    </div>
                                    <div class="job-company"><a href="#"> Tên công ty</a></div>
                                    <div class="job-deal">
                                        <div class="job-location"><i class="fas fa-map-marker-alt"></i> Hồ chí minh</div>
                                        <i class="fas fa-money-bill"></i> thỏa thuân
                                    </div>
                                </div>
                                <div class="col-2 col-btn">
                                    <button class="btn btn-danger">Lưu</button>
                                    <button class="btn btn-success">nộp đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 feature-job">
                        <div class="feature-job-item">
                            <div class="row">
                                <div class="col-2 col-logo">
                                    <a href="">
                                        <div class="box-logo-search">
                                            <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg"
                                                 class="img-size" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-8 col-title">
                                    <div class="title">
                                        <span class="badge badge-warning">New</span>
                                        <a href="#" class="text-uppercase">tiêu đề cần tuyển tiêu đề cần tuyển tiêu đề cần
                                            tuyển</a>
                                    </div>
                                    <div class="job-company"><a href="#"> Tên công ty</a></div>
                                    <div class="job-deal">
                                        <div class="job-location"><i class="fas fa-map-marker-alt"></i> Hồ chí minh</div>
                                        <i class="fas fa-money-bill"></i> thỏa thuân
                                    </div>
                                </div>
                                <div class="col-2 col-btn">
                                    <button class="btn btn-danger">Lưu</button>
                                    <button class="btn btn-success">nộp đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 feature-job">
                        <div class="feature-job-item">
                            <div class="row">
                                <div class="col-2 col-logo">
                                    <a href="">
                                        <div class="box-logo-search">
                                            <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg"
                                                 class="img-size" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-8 col-title">
                                    <div class="title">
                                        <span class="badge badge-secondary">New</span>
                                        <a href="#" class="text-uppercase">tiêu đề cần tuyển tiêu đề cần tuyển tiêu đề cần
                                            tuyển</a>
                                    </div>
                                    <div class="job-company"><a href="#"> Tên công ty</a></div>
                                    <div class="job-deal">
                                        <div class="job-location"><i class="fas fa-map-marker-alt"></i> Hồ chí minh</div>
                                        <i class="fas fa-money-bill"></i> thỏa thuân
                                    </div>
                                </div>
                                <div class="col-2 col-btn">
                                    <button class="btn btn-danger">Lưu</button>
                                    <button class="btn btn-success">nộp đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 feature-job">
                        <div class="feature-job-item">
                            <div class="row">
                                <div class="col-2 col-logo">
                                    <a href="">
                                        <div class="box-logo-search">
                                            <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg"
                                                 class="img-size" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-8 col-title">
                                    <div class="title">
                                        <span class="badge badge-dark">New</span>
                                        <a href="#" class="text-uppercase">tiêu đề cần tuyển tiêu đề cần tuyển tiêu đề cần
                                            tuyển</a>
                                    </div>
                                    <div class="job-company"><a href="#"> Tên công ty</a></div>
                                    <div class="job-deal">
                                        <div class="job-location"><i class="fas fa-map-marker-alt"></i> Hồ chí minh</div>
                                        <i class="fas fa-money-bill"></i> thỏa thuân
                                    </div>
                                </div>
                                <div class="col-2 col-btn">
                                    <button class="btn btn-danger">Lưu</button>
                                    <button class="btn btn-success">nộp đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 feature-job">
                        <div class="feature-job-item">
                            <div class="row">
                                <div class="col-2 col-logo">
                                    <a href="">
                                        <div class="box-logo-search">
                                            <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg"
                                                 class="img-size" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-8 col-title">
                                    <div class="title">
                                        <span class="badge badge-pill">New</span>
                                        <a href="#" class="text-uppercase">tiêu đề cần tuyển tiêu đề cần tuyển tiêu đề cần
                                            tuyển</a>
                                    </div>
                                    <div class="job-company"><a href="#"> Tên công ty</a></div>
                                    <div class="job-deal">
                                        <div class="job-location"><i class="fas fa-map-marker-alt"></i> Hồ chí minh</div>
                                        <i class="fas fa-money-bill"></i> thỏa thuân
                                    </div>
                                </div>
                                <div class="col-2 col-btn">
                                    <button class="btn btn-danger">Lưu</button>
                                    <button class="btn btn-success">nộp đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 feature-job">
                        <div class="feature-job-item">
                            <div class="row">
                                <div class="col-2 col-logo">
                                    <a href="">
                                        <div class="box-logo-search">
                                            <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg"
                                                 class="img-size" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-8 col-title">
                                    <div class="title">
                                        <span class="badge badge-info">New</span>
                                        <a href="#" class="text-uppercase">tiêu đề cần tuyển tiêu đề cần tuyển tiêu đề cần
                                            tuyển</a>
                                    </div>
                                    <div class="job-company"><a href="#"> Tên công ty</a></div>
                                    <div class="job-deal">
                                        <div class="job-location"><i class="fas fa-map-marker-alt"></i> Hồ chí minh</div>
                                        <i class="fas fa-money-bill"></i> thỏa thuân
                                    </div>
                                </div>
                                <div class="col-2 col-btn">
                                    <button class="btn btn-danger">Lưu</button>
                                    <button class="btn btn-success">nộp đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 feature-job">
                        <div class="feature-job-item">
                            <div class="row">
                                <div class="col-2 col-logo">
                                    <a href="">
                                        <div class="box-logo-search">
                                            <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg"
                                                 class="img-size" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-8 col-title">
                                    <div class="title">
                                        <span class="badge badge-primary">New</span>
                                        <a href="#" class="text-uppercase">tiêu đề cần tuyển tiêu đề cần tuyển tiêu đề cần
                                            tuyển</a>
                                    </div>
                                    <div class="job-company"><a href="#"> Tên công ty</a></div>
                                    <div class="job-deal">
                                        <div class="job-location"><i class="fas fa-map-marker-alt"></i> Hồ chí minh</div>
                                        <i class="fas fa-money-bill"></i> thỏa thuân
                                    </div>
                                </div>
                                <div class="col-2 col-btn">
                                    <button class="btn btn-danger">Lưu</button>
                                    <button class="btn btn-success">nộp đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection