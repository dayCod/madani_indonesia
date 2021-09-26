  <aside class="main-sidebar">
    <section class="sidebar">

    
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/dist/img/user1-128x128.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::guard('login_admin')->user()->nama }}</p>
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <!-- menu dasbord yang verikal -->
        <li class="header text-center">Menu Navigation</li>
        <li><a href="{{ url('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ url('admin.index_tambah') }}"><i class="fa fa-plus"></i> <span>Tambah Content</span></a></li>
        <li style="display: none;"><a href="{{ url('admin_new.edit') }}"><i class="fa fa-plus"></i> <span>Edit Content</span></a></li>
        <li><a href="{{ route('admin_new.index') }}"><i class="fa fa-list"></i> <span>List Content</span></a></li>
        <li><a href="{{ url('admin.saran') }}"><i class="fa fa-inbox"></i> <span>Kritik & Saran</span></a></li>
        <li><a href="{{ url('admin.list_sub') }}"><i class="fa fa-heart"></i> <span>Subscription</span></a></li>
        <li><a href="{{ url('admin.list_gambar') }}"><i class="fa fa-image"></i> <span>Gallery</span></a></li>
        <li><a href="{{ route('logout') }}"><i class="fa fa-user"></i> <span>Log Out</span></a></li>
    </section>
  </aside>