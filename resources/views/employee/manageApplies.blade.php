@extends('layouts.master')
@section('title','Quản lý đơn xin việc')
@section('content')
    <div class="container-fluid content-child">
        <table class="table table-hover">
            <thead class="text-center thead-light">

            <tr>
                <th scope="col">ID</th>
                <th scope="col" >Tin tuyển dụng</th>
                <th scope="col">Tiền lương thấp nhất</th>
                <th scope="col">Tiền lương cao nhất</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Loại</th>
                <th scope="col">khu vực</th>
                <th scope="col" >Tình trạng</th>

            </tr>
            </thead>
            <tbody  class="text-center">
            @foreach($applyJobs as $applyJob)
                <tr>
                    <th scope="row"> {{$applyJob->apply_id}}</th>
                    <td > <a href="{{route('getJobDetail',$applyJob->id)}}">{{$applyJob->title}}</a> </td>
                    <td>{{$applyJob->minsalary !== null ? $applyJob->minsalary : "thỏa thuận" }}</td>
                    <td>{{$applyJob->maxsalary !== null ? $applyJob->maxsalary : "thỏa thuận" }}</td>
                    <td>{{$applyJob->phone}}</td>
                    <td>{{$applyJob->amount}}</td>
                    <td>{{$applyJob->jobcategory}}</td>
                    <td>{{$applyJob->jobtype}}</td>
                    <td>{{$applyJob->area}}</td>
                    <td class="bg-info">
                        {{$applyJob->status == 0 ? "chưa duyệt" : "đã duyệt"}}</td>
{{--                    <td>{{$item->address}} {{$item->district}}, {{$item->city}}</td>--}}
{{--                    <td>--}}
{{--                        <button class="btn btn-outline-danger" id="del-wishlist" data-id="{{$item->wl_id}}">Xóa</button>--}}
{{--                    </td>--}}

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
