@extends('layouts.master')
@section('title','Trang quản lý tuyển dụng')
@section('content')
    <div class="container content-child">
        <table class="table table-hover">
            <thead class="text-center thead-light">

            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tin tuyển dụng</th>
                <th scope="col">người tìm việc</th>
                <th scope="col">Ngày bắt đầu</th>
                <th scope="col">Ngày kết thúc</th>
                <th scope="col">Tình trạng</th>

            </tr>
            </thead>
            <tbody class="text-center">

            @foreach($applied as  $item)
                <tr>
                    <th scope="row"> {{$item->apply_id}}</th>
                    <td> {{$item->title}} </td>
                    <td><a href="{{route('employer.getEmployee',$item->user_id)}}">
                            {{ \App\Models\employees::where(['user_id' =>
                    $item->user_id])->pluck
                    ('lastname')
                    ->first() }} {{
                    \App\Models\employees::where(['user_id' => $item->user_id])->pluck('firstname')->first() }}
                        </a></td>
                    <td>{{$item->startdate}}</td>
                    <td>{{$item->enddate}}</td>
                    <td>
                        @if($item->status == 0)
                            <form method="post" action="{{route('employer.Applied')}}">
                                @csrf
                                <input type="hidden" name="apply_id" value="{{$item->apply_id}}">

                                <input class="btn btn-primary " type="submit" value="Xác nhận">
                            </form>
                        @else
                            <span class=" btn btn-info inactive-Link" style="color:#fff;"> Đã xác nhận</span>
                        @endif


                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
