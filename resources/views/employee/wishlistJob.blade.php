@extends('layouts.master')
@section('title','Danh sách yêu thích nhà tuyển dụng')
@section('content')
    <div class="container content-child">

        <div class="search-content">
            <h4> Tìm kiếm các công việc cần thiết</h4>
            <div class="search-content-background">

                @include('form.formFindJob')
            </div>

        </div>
        <div class="table-wishlist-employer">
            <h1 class="text-uppercase text-center title-h1">Danh sách lưu việc</h1>

            <table class="table table-hover">
                <thead class="text-center">

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" >Tin tuyển dụng</th>
                    <th scope="col">Tiền lương</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Loại</th>
                    <th scope="col">khu vực</th>
                    <th scope="col" >xóa</th>

                </tr>
                </thead>
                <tbody  class="text-center">
                @foreach($wishList as $item)
                    <tr>
                        <th scope="row"> {{$item->id}}</th>
                        <td> <a href="{{route('getJobDetail',$item->job_id)}}">{{$item->title}}</a></td>
                        <td>
                            @if($item->negotiable == null)
                                {{$item->minsalary}} - {{$item->maxsalary}}
                            @else
                                Thỏa thuận
                            @endif
                        </td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->amount}}</td>
                        <td>{{$item->jobcategory}}</td>
                        <td>{{$item->jobtype}}</td>
                        <td>{{$item->area}}</td>
{{--                        <td colspan="2"> <a href="{{route('general.getProfileEmployer',$item->employer_id)}}">{{$item->name}}</a> </td>--}}
{{--                        <td>{{$item->address}} {{$item->district}}, {{$item->city}}</td>--}}
                        <td>
                            <button class="btn btn-outline-danger" id="del-wishlist-job" data-id="{{$item->wl_id}}">Xóa</button>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>


    </div>

@endsection
