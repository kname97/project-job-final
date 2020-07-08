@extends('admin.layoutsAdmin.masterAdmin')
@section('title', ' Quản lý đơn xin việc')
@section('breadcrumd','Quản lý đơn xin việc')
@section('content')
    <div class="container content-child">
        <table class="table table-hover">
            <thead class="text-center thead-light">

            <tr>
                <th scope="col">ID</th>
                <th scope="col" >Tin tuyển dụng</th>
                <th scope="col">người tìm việc</th>
                <th scope="col">Ngày bắt đầu</th>
                <th scope="col">Ngày kết thúc</th>

                <th scope="col" >Tình trạng</th>

            </tr>
            </thead>
            <tbody  class="text-center">

            @foreach($applies as  $item)
                <tr>
                    <th scope="row"> {{$item->apply_id}}</th>
                    <td > {{$item->title}} </td>
                    <td>
                        {{ \App\Models\employees::where(['user_id' =>$item->user_id])->pluck('lastname')->first() }}
                        {{\App\Models\employees::where(['user_id' => $item->user_id])->pluck('firstname')->first() }}
                         </td>
                    <td>{{ date('d-m-Y', strtotime($item->startdate))}}</td>
                    <td>{{ date('d-m-Y', strtotime($item->enddate))}}</td>
                    <td>
                        @if($item->status == 0)
                            <form method="post" action="{{route('admin.applied')}}">
                                @csrf
                                <input type="hidden" name="apply_id" value="{{$item->apply_id}}">

                                <input class="btn btn-primary " type="submit" value="Xác nhận">
                            </form>
                        @else
                            <form method="post" action="{{route('admin.unapplied')}}">
                                @csrf
                                <input type="hidden" name="apply_id" value="{{$item->apply_id}}">

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