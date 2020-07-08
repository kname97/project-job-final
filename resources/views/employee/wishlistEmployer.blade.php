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
            <h1 class="text-uppercase text-center title-h1">Danh sách nhà tuyển dụng yêu thích</h1>

                <table class="table table-hover">
                    <thead class="text-center">

                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" colspan="2">Nhà tuyển dụng</th>
                        <th scope="col">Địa chỉ chính</th>
                        <th scope="col" >xóa</th>

                    </tr>
                    </thead>
                    <tbody  class="text-center">
                    @foreach($wishList as $item)
                        <tr>
                            <th scope="row"> {{$item->id}}</th>
                            <td colspan="2"> <a href="{{route('general.getProfileEmployer',$item->employer_id)}}">{{$item->name}}</a> </td>
                            <td>{{$item->address}} {{$item->district}}, {{$item->city}}</td>
                            <td>
                                <button class="btn btn-outline-danger" id="del-wishlist" data-id="{{$item->wl_id}}">Xóa</button>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>


        </div>


    </div>

@endsection
