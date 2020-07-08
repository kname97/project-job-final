@extends('layouts.master')
@section('title','Chào mừng bạn đến với chúng tôi')
@section('content')
    <div class="card-img ">
        <div class="text-white text-center py-5 px-4">
            <h2 class="card-title h1-responsive pt-3 mb-5 font-bold text-uppercase"><strong>Chào mừng đến với trang tin
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
{{--                    @if(count($jobDatas))--}}
                        @foreach($jobDatas as $jobData)
                            <div class="col-md-4 col-sm-6 feature-job">
                                <div class="feature-job-item">
                                    <div class="row">
                                        <div class="col-xl-3 col-logo">
                                            <a href="{{ route('general.getProfileEmployer', $jobData->id_employer) }}">
                                                <div class="box-logo">
                                                    <img src="{{asset($jobData->avatar)}}"
                                                         class="img-size-2" alt="ảnh đại diện">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-9 col-title">
                                            <div class="title">
                                                <a href="{{route('getJobDetail',$jobData->id)}}"
                                                   class="text-uppercase">{{$jobData->title}}</a>
                                            </div>
                                            <div class="job-company"><a
                                                        href="{{ route('general.getProfileEmployer', $jobData->id_employer) }}">
                                                    {{$jobData->name}}</a></div>
                                            <div class="job-deal">
                                                <div class="job-location"><i class="fas
                                                fa-map-marker-alt"></i>{{$jobData->area}}</div>
                                                <i class="fas fa-money-bill"></i>
                                                @if (Auth::check())
                                                    @if($jobData->negotiable == null)
                                                        {{$jobData->minsalary}} -
                                                        {{$jobData->maxsalary}}
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
                        @endforeach
{{--                    @else--}}
{{--                        <div class="col-12 text-center"> Không có nhà tuyển dụng nào đăng tin</div>--}}

{{--                    @endif--}}

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
{{--                    @if(count($employerDatas))--}}
{{--                        @foreach( $employerDatas as $employerData)--}}
                            @for($i = 0; $i < 6; $i++)
                            <div class="col-md-4 col-xs-12 feature-company ">
                                <a href="{{ route('general.getProfileEmployer', $employerDatas[$i]->id) }}" class="top-company">
                                    <div class="company-logo text-center">
                                        <img src="{{$employerDatas[$i]->avatar !==null ? asset($employerDatas[$i]->avatar): asset
                                        ('images/avartar/avatar_default.png')}}"
                                             class="img-size-3"
                                             alt="">
                                    </div>
                                    <div class="company-name text-center" data-toggle="tooltip" data-placement="bottom"
                                         title="{{$employerDatas[$i]->name}}">
                                        {{$employerDatas[$i]->name !== null ? $employerDatas[$i]->name : 'nhà tuyển dụng chưa cập
                                         nhận
                                         thông
                                        tin'}}
                                    </div>
                                    <div class="company-footer text-center">
                                    <span class="company-footer-jobs"> <span class="link">{{$employerDatas[$i]->sumJob}}
                                            tin</span></span>
                                        <span class="company-footer-location">{{$employerDatas[$i]->address}},
                                            {{$employerDatas[$i]->district}},
                                        {{$employerDatas[$i]->city}}
                                </span>
                                    </div>
                                </a>
                            </div>
                        @endfor
{{--                        @endforeach--}}
{{--                    @esndif--}}
{{--                        <div class="col-12 text-center"> Không chưa có nhà tuyển dụng nào đăng ký</div>--}}

                </div>
            </div>
        </section>


    </div>
@endsection
