<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">JOBs</div>
    <div class="list-group list-group-flush">
        <a href="{{ url('/admin') }}" class="list-group-item list-group-item-action  {{request()->is('admin') ? ' bg-success text-light' : '' }}" >Bảng thống kê</a>
        <a href="{{ url('/admin/manage-accounts') }}" class="list-group-item list-group-item-action  {{request()->is('admin/manage-accounts') ? ' bg-success text-light' : '' }}">Quản lý tài khoản</a>
        <a class="nav-link" href="#collapseManage" data-toggle="collapse" data-target="#collapseManage" aria-expanded="true" aria-controls="collapseManage"> Quản lý danh mục</a>
        <div class="collapse " id="collapseManage" >
            <nav class=" nav">
                <a href="{{ url('/admin/manage-applies') }}" class="list-group-item list-group-item-action  {{request()->is('admin/manage-applies') ? ' bg-success text-light' : '' }}">Đơn xin việc</a>
                <a href="{{ url('/admin/manage-ranks') }}" class="list-group-item list-group-item-action  {{request()->is('admin/manage-ranks') ? ' bg-success text-light' : '' }}">Bảng xếp hạng</a>
                <a href="{{ url('/admin/manage-reviews') }}" class="list-group-item list-group-item-action  {{request()->is('admin/manage-reviews') ? ' bg-success text-light' : '' }}">Các nhận xét, đánh giá</a>
            </nav>
        </div>
        
        
    </div>
  </div>