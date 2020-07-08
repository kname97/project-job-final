@extends("layouts.master")
@section('title')

@endsection
@section('content')

            <div class="container">
                <div class="span3 well">
                    <center>
                        <div class="m-md-3">
                            <img src="{{ $employee->avatar !==null ? asset($employee->avatar) : asset('images/avartar/avatar_default.png')}}  " name="aboutme"
                                 width="140"
                                 height="140"
                                 class="img-circle img-thumbnail">
                        </div>
                        <h3  class="text-uppercase m-md-3">{{$employee->lastname}} {{$employee->firstname}}</h3>
                    </center>
                    <center>
                    <span><strong>Skills: </strong></span>
                        @if($employee->tag_skill !== null)

                            @foreach(explode(',',$employee->tag_skill ) as $skill)
                                <span href="#" class="label label-info">{{$skill}}</span>
                            @endforeach
                        @else
                            Người tìm việc chưa nhập kỹ năng
                        @endif

                    </center>
                    <center class="m-md-3">
                        <div class="pnone ">Số điện thoại : {{$employee->phone}} </div>
                        <div class="email">Email : {{$user->email}} </div>
                        <div class="address ">Địa chỉ : {{$employee->address}}, {{$employee->district}}, {{$employee->city}}
                        </div>
                        <div class="gender ">Giới tính : {{$employee->gender}} </div>
                        <div class="dob"> Ngày sinh : {{$employee->dob}} </div>

                    </center>
                </div>

                <div class="all-des">
                    <h4> mô tả bản thân</h4>
                    <small style="color: silver">nên mêu tả rõ ràng để gây ấn tượng với nhà tuyển dụng *</small>
                    <div class="des" >
                        {!! $employee->description !== null ? $employee->description : 'người tìm việc chưa có thông tin mô tả'!!}
                    </div>
                </div>
            </div>



@endsection
