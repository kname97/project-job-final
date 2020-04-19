<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">JOBs</div>
    <div class="list-group list-group-flush">
      <a href="{{ url('/admin') }}" class="list-group-item list-group-item-action {{request()->is('admin') ? ' bg-success' : '' }}">Dashboard</a>
      <a href="{{ url('/admin/demo') }}" class="list-group-item list-group-item-action {{request()->is('admin/demo') ? ' bg-success' : '' }}">đơn xin việc</a>
    </div>
  </div>