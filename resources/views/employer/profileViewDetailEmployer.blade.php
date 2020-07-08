@extends("layouts.master")
@section('title')
    Trang thông tin của {{$employers->name}}
@endsection
@section('content')
    <section class="inner-header-title">
        <div class="container">
            <h1 class="text-uppercase">{{$employers->name}}</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="detail-desc">
        <div class="container white-shadow">
            <div class="row">
                <div class="detail-pic"><img src="{{asset($employers->avatar)}}" class="img" alt=""/></div>
            </div>
            <div class="row bottom-mrg">
                <div class="col-md-8 col-sm-8">
                    <div class="detail-desc-caption">
                        <h4>Mô tả cơ bản</h4>
                        <div class="description">
                            {!!$employers->description !== null ? $employers->description : 'Nhà tuyển dụng không có mô tả ' !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="get-touch">
                        <h4>Thông tin cơ bản</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i><span> {{$employers->address}},
                                    {{$employers->district}}, {{$employers->city}}</span></li>
                            <li><i class="fa fa-envelope"></i><span> {{$users->email}}</span></li>

                            <li><i class="fa fa-phone"></i><span> {{$employers->phone}}</span></li>
                            <li><i class="fa fa-briefcase"></i><span> {{$employers->business_sector}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row no-padd">
                <div class="detail pannel-footer">
                    <div class="col-12">
                        @if(Auth::check())
                            @if($checkWL == null)
                                <div class="detail-pannel-footer-btn pull-right ">
                                    <a href="javascript:void(0)" class="footer-btn  grn-btn" data-id="{{$employers->id}}"
                                       id="wishlist_employer">
                                        Yêu thích
                                    </a>
                                </div>
                            @else
                                <div class="detail-pannel-footer-btn pull-right ">
                                    <a href="javascript:void(0)" class="footer-btn {{$checkWL->user_id ==auth()->user()->id ?
                        'inactive-Link' :''}} grn-btn" data-id="{{$employers->id}}" id="wishlist_employer">
                                        {{$checkWL->user_id == auth()->user()->id ?'Đã thêm vào danh sách yêu thích' : 'Yêu thích'}}
                                    </a>
                                </div>
                            @endif
                        @else

                            <div class="detail-pannel-footer-btn pull-right ">
                                <a href="javascript:void(0)" class="footer-btn  grn-btn" data-toggle="modal"
                                   data-target="#loginModal">
                                    Yêu thích
                                </a>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
    </section>
    <section class="full-detail-description full-detail">
        <div class="container">
            <div class="row row-bottom">
                <h2 class="detail-title">Các công việc đã đăng</h2>
                <section id="list-jobs" class="top-jobs">
                    <div class="container" id="feature-jobs">
                        <div class="row">
                            @foreach($jobs as $job)
                                <div class="col-12 feature-job">

                                    <div class="feature-job-item">
                                        <div class="row">
                                            <div class="col-4 col-logo">
                                                <a href="{{ route('general.getProfileEmployer', $job->id_employer) }}">
                                                    <div class="box-logo-search-2">
                                                        <img src="{{asset($job->avatar)}}"
                                                             class="img-size" alt="ảnh đại diện">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-8 col-title">
                                                <div class="title">
                                                    <a href="{{ route('getJobDetail',$job->id) }}"
                                                       class="text-uppercase">{{$job->title}}</a>
                                                </div>
                                                <div class="job-company"><a
                                                            href="{{ route('general.getProfileEmployer', $job->id_employer) }}">{{$employers->name}}</a>
                                                </div>
                                                <div class="job-deal">
                                                    <div class="job-location"><i class="fas
                                                fa-map-marker-alt"></i>{{$job->area}}</div>
                                                    <i class="fas fa-money-bill"></i>
                                                    @if (Auth::check())
                                                        @if($job->negotiable == null)
                                                            {{$job->minsalary}} -
                                                            {{$job->maxsalary}}
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
                        </div>
                    </div>
                    <div class="float-right">
                        {{ $jobs->links() }}
                    </div>

                </section>
            </div>

        </div>
    </section>
@endsection
