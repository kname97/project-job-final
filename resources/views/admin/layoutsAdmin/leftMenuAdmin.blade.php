<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">JOBs</div>
    <div class="list-group list-group-flush">
        <a href="{{ route('adminHome') }}" class="list-group-item list-group-item-action  {{request()->is('admin') ? ' bg-success
        text-light' :
        '' }}">Bảng thống kê</a>
        <a href="{{ route('adminAccount') }}" class="list-group-item list-group-item-action  {{request()->is('admin/manage-accounts')
        ? '
        bg-success text-light' : '' }}">Quản lý tài khoản</a>
        <a class="nav-link" href="#collapseManage" data-toggle="collapse" data-target="#collapseManage" aria-expanded="true"
           aria-controls="collapseManage"> Quản lý danh mục</a>
        <div class="collapse show" id="collapseManage">
            <nav class=" nav">
                <a href="{{ route('adminApply') }}" class="list-group-item list-group-item-action  {{request()->is
                ('admin/quan-ly-don-xin-viec') ? '
                bg-success text-light' : '' }}">Đơn xin việc</a>
                <a href="{{ route('adminJob') }}" class="list-group-item list-group-item-action  {{request()->is('quan-ly-tin-tuyen-dung')
                 ? '
                bg-success text-light' : '' }}">Tin tuyển dụng</a>
{{--                <a href="{{ route('adminReview') }}" class="list-group-item list-group-item-action  {{request()->is('admin/manage-reviews') ? '--}}
{{--                bg-success text-light' : '' }}">Các nhận xét, đánh giá</a>--}}
            </nav>
        </div>


    </div>
</div>