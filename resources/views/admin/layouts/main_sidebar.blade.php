<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">sweet store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{ Request::is('admin/dashboard*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p class='font-weight-bold'>
                لوحة التحكم
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link {{ Request::is('admin/index*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>المديرين</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::is('admin/categories*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p class='font-weight-bold'>
                الأقسام
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}" class="nav-link {{ Request::is('admin/categories') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>كل الأقسام</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.categories.create') }}" class="nav-link {{ Request::is('admin/categories/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>إضافة قسم</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::is('admin/products*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/products*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p class='font-weight-bold'>
                المنتجات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.products.index') }}" class="nav-link {{ Request::is('admin/products') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>كل المنتجات</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.products.create') }}" class="nav-link {{ Request::is('admin/products/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>إضافة منتج</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
