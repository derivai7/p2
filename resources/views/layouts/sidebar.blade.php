<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link text-center">
        <div class="brand-text font-weight-light">PWL</div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('profile') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('kuliah') }}" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Pengalaman Kuliah
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('kendaraan') }}" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Daftar Kendaraan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('hobi') }}" class="nav-link">
                        <i class="nav-icon fas fa-gamepad"></i>
                        <p>
                            Daftar Hobi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('matakuliah') }}" class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Daftar Mata Kuliah
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('keluarga') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Keluarga
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
