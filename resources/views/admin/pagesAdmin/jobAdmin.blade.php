@extends('admin.layoutsAdmin.masterAdmin')
@section('title', ' Quản lý tin tuyển dụng')
@section('breadcrumd','Quản lý tin tuyển dụng')
@section('content')
    <div class="container content-child">
        <table class="table table-hover">
            <thead class="text-center thead-light">

            <tr>
                <th scope="col">ID</th>
                <th scope="col" >Tin tuyển dụng</th>
                <th scope="col">nhà tuyển dụng</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Loại</th>
                <th scope="col">Ngày bắt đầu</th>
                <th scope="col">Ngày kết thúc</th>
                <th scope="col" >Tình trạng</th>
                <th scope="col">Hành động</th>

            </tr>
            </thead>
            <tbody  class="text-center">

            @foreach($jobData as  $item)
                <tr>
                    <th scope="row"> {{$item->id}}</th>
                    <td > {{$item->title}} </td>
                    <td > {{$item->name}} </td>
                    <td>{{$item->jobcategory}}</td>
                    <td>{{$item->jobtype}}</td>
                    <td>{{date('d-m-Y', strtotime($item->startdate))}}</td>
                    <td>{{date('d-m-Y', strtotime($item->enddate))}}</td>
                    <td>{{$item->status ==0 ? 'Chưa duyệt' :'Đã duyệt'}}</td>

{{--                    <td>--}}
{{--                        {{ \App\Models\employees::where(['user_id' =>$item->user_id])->pluck('lastname')->first() }}--}}
{{--                        {{\App\Models\employees::where(['user_id' => $item->user_id])->pluck('firstname')->first() }}--}}
{{--                    </td>--}}
{{--                    <td>{{ date('d-m-Y', strtotime($item->startdate))}}</td>--}}
{{--                    <td>{{ date('d-m-Y', strtotime($item->enddate))}}</td>--}}
                    <td>
                        @if($item->status == 0)
                            <form method="post" action="{{route('admin.appliedjob')}}">
                                @csrf
                                <input type="hidden" name="job_id" value="{{$item->id}}">

                                <input class="btn btn-primary " type="submit" value="Xác nhận">
                            </form>
                        @else
                            <form method="post" action="{{route('admin.unappliedjob')}}">
                                @csrf
                                <input type="hidden" name="job_id" value="{{$item->id}}">

                                <input class="btn btn-danger " type="submit" value="Hủy xác nhận">
                            </form>
                        @endif



                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection