@extends('layouts.master')
@section('title','Chào mừng bạn đến với chúng tôi')
@section('content')
    <div class="card-img " >
        <div class="text-white text-center py-5 px-4">
            <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Chào mừng đến với trang tin
                    tuyển dụng và tìm kiếm việc làm của chúng tôi</strong></h2>
            <p class=" mb-5">Đây là trang mà các nhà tuyển dụng có thể dễ dàng đăng các tin tuyển dụng đẻ tìm kiếm nhân
                sự cho công ty tổ chức của mình và Người tìm việc có nhiều cơ hội hơn tìm kiếm các viêc làm phù hợp với
                bản thân.
            </p>
        </div>
        <div class="mt-lg-3">
            <div class="search-content-background">
                @include('form.formFindJob')
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row" id="title-topper">
            <div class=" col-12 text-center">
                <h2>Các tin tuyển dụng</h2>
            </div>
            <div class="col-12 text-bold text-center">
                <h2>
                    Tin tuyển dụng <span class="txt-primary">mới nhất</span>
                </h2>
            </div>
        </div>
        <section id="list-jobs" class="top-jobs">
            <div class="container" id="feature-jobs">
                <div class="row">
                    @for($i =0; $i< 9;$i++)
                        <div class="col-md-4 col-sm-6 feature-job">
                            <div class="feature-job-item">
                                <div class="row">
                                    <div class="col-xl-3 col-logo">
                                        <a href="">
                                            <div class="box-logo">
                                                <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg"
                                                     class="img-size" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-9 col-title">
                                        <div class="title">
                                            <a href="#" class="text-uppercase">{{$jobDatas[$i]->title}}</a>
                                        </div>
                                        <div class="job-company"><a href="#"> Tên công ty</a></div>
                                        <div class="job-deal">
                                            <div class="job-location"><i class="fas
                                            fa-map-marker-alt"></i>{{$jobDatas[$i]->area}}</div>
                                            <i class="fas fa-money-bill"></i>
                                            @if (Auth::check())
                                                @if($jobDatas[$i]->negotiable == NULL)
                                                    {{$jobDatas[$i]->minsalary}} -
                                                    {{$jobDatas[$i]->maxsalary}}
                                                @else
                                                    Thỏa thuận
                                                @endif
                                            @else
                                                Thỏa thuận
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor


                </div>
            </div>
        </section>
        {{-- feature employer --}}
        <div class="row" id="title-topper">
            <div class=" col-12 text-center">
                <h2>Các nhà tuyển dụng</h2>
            </div>
            <div class="col-12 text-bold text-center">
                <h2>
                    Nhà tuyển dụng <span class="txt-primary">nổi bật</span>
                </h2>
            </div>
        </div>
        <section class="top-companies">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 feature-company ">
                        <a href="#" class="top-company">
                            <div class="company-logo text-center">
                                <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg" class="img-size"
                                     alt="">
                            </div>
                            <div class="company-name text-center">
                                công ty tên là a
                            </div>
                            <div class="company-footer text-center">
                                <span class="company-footer-jobs"> <span class="link">11 tin</span></span>
                                <span class="company-footer-location">Hồ Chí Minh</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 feature-company ">
                        <a href="#" class="top-company">
                            <div class="company-logo text-center">
                                <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg" class="img-size"
                                     alt="">
                            </div>
                            <div class="company-name text-center">
                                công ty tên là a
                            </div>
                            <div class="company-footer text-center">
                                <span class="company-footer-jobs"> <span class="link">11 tin</span></span>
                                <span class="company-footer-location">Hồ Chí Minh</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 feature-company ">
                        <a href="#" class="top-company">
                            <div class="company-logo text-center">
                                <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg" class="img-size"
                                     alt="">
                            </div>
                            <div class="company-name text-center">
                                công ty tên là a
                            </div>
                            <div class="company-footer text-center">
                                <span class="company-footer-jobs"> <span class="link">11 tin</span></span>
                                <span class="company-footer-location">Hồ Chí Minh</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 feature-company ">
                        <a href="#" class="top-company">
                            <div class="company-logo text-center">
                                <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg" class="img-size"
                                     alt="">
                            </div>
                            <div class="company-name text-center">
                                công ty tên là a
                            </div>
                            <div class="company-footer text-center">
                                <span class="company-footer-jobs"> <span class="link">11 tin</span></span>
                                <span class="company-footer-location">Hồ Chí Minh</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 feature-company ">
                        <a href="#" class="top-company">
                            <div class="company-logo text-center">
                                <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg" class="img-size"
                                     alt="">
                            </div>
                            <div class="company-name text-center">
                                công ty tên là a
                            </div>
                            <div class="company-footer text-center">
                                <span class="company-footer-jobs"> <span class="link">11 tin</span></span>
                                <span class="company-footer-location">Hồ Chí Minh</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 feature-company ">
                        <a href="#" class="top-company">
                            <div class="company-logo text-center">
                                <img src="https://static.topcv.vn/company_logos/apax-leader-5bfcf4d84ef8e_rs.jpg" class="img-size"
                                     alt="">
                            </div>
                            <div class="company-name text-center">
                                công ty tên là a
                            </div>
                            <div class="company-footer text-center">
                                <span class="company-footer-jobs"> <span class="link">11 tin</span></span>
                                <span class="company-footer-location">Hồ Chí Minh</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
