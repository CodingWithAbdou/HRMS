<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">name</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview  ">
            <a  href="{{ route('general_settings_view') }}" class="nav-link  ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                قائمة الضبط
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('general_settings_view') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>الضبط العام</p>
                    </a>
                </li>
            </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
