<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <br>
        <div class="sidebar-brand">
            <img alt="image" src="../assets/img/avatar/reksa.png" class=" mx-auto d-block " width="100" height="60">
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item ">
                <a href="{{ route('home') }}" class="nav-link ">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            <li class="menu-header">Starter</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i></i> <span>Management Projek</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('dataProyek.index') }}">Data Projek</a></li>
                    <li><a class="nav-link" href="{{ route('dokumenProyek.index') }}">Document Projek</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-upload"></i></i> <span>Sign Projek</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('signProject.index') }}">Personil Projek</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Learning Path</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('targetPembelajaran.index') }}">Target Pembelajaran</a></li>
                    <li><a class="nav-link" href="{{ route('realisasiPembelajaran.index') }}">Realisasi Pembelajaran</a></li>
                </ul>
            </li>
            <li class="menu-header">Management and Setting</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i></i> <span>Master Data</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('client.index') }}">Data Client</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="{{ route('jabatan.index') }}">Data Jabatan</a></li>
                    {{-- @can('user-list') --}}
                    <li><a class="nav-link" href="{{ route('users.index') }}">Data Pengguna</a></li>
                    {{-- @endcan --}}
                    <li><a class="nav-link beep beep-sidebar" href="{{ route('bidang.index') }}">Data Bidang</a></li>
                    {{-- @can('role-list') --}}
                    <li><a class="nav-link" href="{{ route('roles.index') }}">Management Role</a></li>
                    {{-- @endcan --}}
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i></i> <span>Talent Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('/datapersonil') }}">Data Personil</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="{{ url('/datakontrak') }}">Data Kontrak</a></li>
                    <li><a class="nav-link" href="{{ url('/datapendidikan') }}">Data Pendidikan</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="{{ url('/dataskill') }}">Data Skills</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="{{ url('/portofolio') }}">Portofolio</a></li>
                </ul>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link ">
                    <i class="fas fa-cog"></i>
                    <span>Setting</span>
                </a>
    </aside>
</div>
