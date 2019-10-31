<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{ asset('images/faces/face8.jpg')}}" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{ Auth::user()->name }}</p>
                    <p class="designation">
                        @if(Auth::user()->role == 1)
                        Manager
                        @elseif(Auth::user()->role ==2)
                        HR
                        @else
                        Staff
                        @endif
                    </p>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('home') }}">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if(Auth::user()->role == 2)
        {{-- HR --}}
        <li class="nav-item nav-category">Menu HR</li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu-hr" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-hr">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user') }}">Daftar User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/form') }}">Tambah User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Export Data</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu-cuti" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Cuti</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-cuti">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ('cuti') }}">Daftar Cuti User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ('cuti/form') }}">Tambah Cuti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/typography.html">Export Data</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu-pengumuman" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Pengumuman</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-pengumuman">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ('pengumuman') }}">Daftar Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ('cuti/form') }}">Tambah Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/typography.html">Export Data</a>
                    </li>
                </ul>
            </div>
        </li>
        @endif

        @if(Auth::user()->role == 1)
        {{-- manager --}}
        <li class="nav-item nav-category">Menu Manager</li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu-mg" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Approval Cuti</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-mg">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('cuti/daftar-cuti')}}">List Cuti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('cuti/approval-cuti')}}">List Approval</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('cuti/deny-cuti')}}">List Deny</a>
                    </li>
                </ul>
            </div>
        </li>
        @endif


        {{-- Pegawai --}}
        <li class="nav-item nav-category">Menu Pegawai</li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pegawai" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Cuti</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pegawai">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('cuti/history-cuti')}}">Riwayat Cuti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('cuti/form-cuti') }}">Form Pengajuan Cuti</a>
                    </li>
                </ul>
            </div>
        </li>
             </ul>    
    </ul>
</nav>