@extends('layouts.master')
@section('title',' Kết quả tìm kiếm')
@section('content')
    <div class="content-child container">
        <div class="main-entity">
            <div class="side_bar">
                <div class="inside">
                    <div class="logo">
                        <a data-controller="utm-tracking" href="{{route('general.getProfileEmployer',$jobData->id_employer)}}">
                            <img alt="" src="{{asset($jobData->avatar)}}">
                        </a>
                    </div>
                    <div class="employer-info">
                        <h3 class="name">
                            <a data-controller="utm-tracking" href="{{route('general.getProfileEmployer',
                                $jobData->id_employer)}}">{{$jobData->name}}</a>
                        </h3>
                        <div class="basic-info">

                            <p class="gear-icon">
                                {{$jobData->business_sector}}
                            </p>

                            <div class="country-icon">
                                <i class="flag flag-us"></i>
                                <span class="country-name"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    {{$jobData->address}}, {{$jobData->district}},
                                    {{$jobData->city}} </span>
                            </div>


                        </div>
                    </div>
                    <div class="employer-jobs-info">
                        <div class="more_jobs">
                            <div class="employer-profile links">
                                <a href="{{route('general.getProfileEmployer',
                                $jobData->id_employer)}}">Về chúng tôi</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="outside-jr">
                    <div class="saved-wrapper">
                        <div class="saved-body">
                            <a data-toggle="modal" data-target="#sign-in-modal" href="">
                                <div class="big saved saved-default"></div>
                                <div class="saved-text saved-text-default">
                                    @if(Auth::check())
                                        @if($checkWLJ == null)
                                            <a href="javascript:void(0)" class="btn btn-primary" data-id="{{$jobData->id}}"
                                               id="wishlist_job">
                                                Lưu tin tìm việc
                                            </a>
                                        @else

                                            <a href="javascript:void(0)" class="btn btn-primary {{$checkWLJ->user_id == auth()->user()->id ?
                        'inactive-Link' :''}} " data-id="{{$jobData->id}}" >
                                                {{$checkWLJ->user_id == auth()->user()->id ?'Đã lưu' : 'Lưu tin tìm việc'}}
                                            </a>

                                        @endif
                                    @else

                                        <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal"
                                           data-target="#loginModal">Lưu tin tìm việc</a>
                                    @endif

                                </div>
                            </a></div>
                    </div>

                </div>
            </div>

            <div class="job-detail">
                <div class="header">
                    <div class="job_info">
                        <h1 class="job_title">
                            {{$jobData->title}}
                        </h1>
                        <div class="type-list">
                            <span class="big ilabel ">{{$jobData->jobtype}} </span>
                        </div>
                        <div class="cate-list">
                            Danh mục : <span class="">{{$jobData->jobcategory}} </span>
                        </div>
                        <div class="clearfix"></div>
                        @if (auth()->check())
                            @if($jobData->negotiable !== null)
                                <div class="salary signed-in">
                                    Thỏa thuận
                                </div>
                            @else
                                <div class="salary signed-in">
                                    {{$jobData->minsalary}} - {{$jobData->maxsalary}}
                                </div>
                            @endif
                        @else
                            <div class="salary not-signed-in">
                                <a class="view-salary" data-toggle="modal" data-target="#sign-in-modal" rel="nofollow" href="">
                                    Đăng nhập để xem mức lương
                                </a>
                                <div class="address__arrow"></div>
                            </div>
                        @endif


                        <div class="address">
                            <div class="address__icon"></div>
                            <div class="address__full-address">
                                <span> <i class="fa fa-map-marker" aria-hidden="true"></i> {{$jobData->jaddress }} </span>
                            </div>
                            <div class="address">
                                <div class="clearfix"></div>
                            </div>
                            <div class="distance-time-job-posted">
                                <i class="fa fa-calendar"></i>

                                {{ date('d-m-Y', strtotime($jobData->startdate))}} đến {{date('d-m-Y', strtotime
                                ($jobData->enddate))}}
                            </div>
                            <div class="action action-line-top">
                                @if(Auth::check())
                                    @if($checkAJ == null)
                                        <a class="apply_now button-red btn-block " id="apply_job" data-id="{{$jobData->id}}"
                                           href="javascript:void(0)">Ứng
                                            Tuyển</a>
                                    @else

                                        <a href="javascript:void(0)" class="apply_now button-red btn-block btn btn-primary {{$checkAJ->user_id == auth
                                                ()->user()->id ?
                        'inactive-Link' :''}} " data-id="{{$jobData->id}}" id="apply_job">
                                            {{$checkAJ->user_id == auth()->user()->id ? 'Đã Nộp' : 'Ứng
                                            Tuyển'}}
                                        </a>

                                    @endif
                                @else

                                    <a class="apply_now button-red btn-block "   data-toggle="modal"
                                        data-target="#loginModal" data-id="{{$jobData->id}}"
                                        href="javascript:void(0)">Ứng
                                        Tuyển</a>
                                @endif

                            </div>
                            <div class="space-btn"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="job_reason_to_join_us">
                        <h2 class="title">Mô tả công việc</h2>
                        <div class="reason">
                            {!! $jobData->jdesciption !!}
                        </div>
                    </div>

                    <div class="space-bottom"></div>
                </div>
            </div>
        </div>
@endsection