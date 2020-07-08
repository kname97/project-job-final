@extends('layouts.master')
@section('title',' Kết quả tìm kiếm')
@section('content')
    <div class="container content-child">
{{--        <h1 class="text-uppercase text-center title-h1">Bảng xếp hạng nhà tuyển dụng</h1>--}}
        <div class="search-content">
            <h4> Tìm kiếm các công việc cần thiết</h4>
            <div class="search-content-background">
                @include('form.formFindJob')
            </div>
        </div>
        <section id="list-jobs" class="top-jobs">
            <div class="container" id="feature-jobs">
                <div class="row">
                    @foreach($jobSearchs as $jobSearch)
                        <div class="col-12 feature-job">

                            <div class="feature-job-item">
                                <div class="row">
                                    <div class="col-4 col-logo">
                                        <a href="{{ route('general.getProfileEmployer', $jobSearch->id_employer) }}">
                                            <div class="box-logo-search-2">
                                                <img  src="{{asset($jobSearch->avatar)}}"
                                                      class="img-size" alt="ảnh đại diện">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-8 col-title">
                                        <div class="title">
                                            <a href="{{route('getJobDetail',$jobSearch->id)}}"
                                               class="text-uppercase">{{$jobSearch->title}}</a>
                                        </div>
                                        <div class="job-company"><a href="{{ route('general.getProfileEmployer', $jobSearch->id_employer)
                                        }}">{{$jobSearch->name}}</a></div>
                                        <div class="job-deal">
                                            <div class="job-location"><i class="fas
                                                fa-map-marker-alt"></i>{{$jobSearch->area}}</div>
                                            <i class="fas fa-money-bill"></i>
                                            @if (Auth::check())
                                                @if($jobSearch->negotiable == NULL)
                                                    {{$jobSearch->minsalary}} -
                                                    {{$jobSearch->maxsalary}}
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
                {{ $jobSearchs->links() }}
            </div>

        </section>
    </div>
@endsection