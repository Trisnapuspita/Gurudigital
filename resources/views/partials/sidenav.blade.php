<div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->

        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            @if (Auth::user()->isAdmin())
            <li class="nav-item start @yield('open1')">
                <a href="/home" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item @yield('open2')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">Data User</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    {{-- <li class="nav-item start ">
                        <a href="/register2" class="nav-link ">
                            <i class="fa fa-plus-square"></i>
                            <span class="title">Buat User Baru</span>
                        </a>
                    </li> --}}
                    <li class="nav-item start ">
                        <a href="gurudigital/programs/semuapendaftar" class="nav-link ">
                            <i class="icon-list"></i>
                            <span class="title">Pendaftar</span>
                            <span class="badge badge-success">109</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="gurudigital/karyawan" class="nav-link ">
                            <i class="icon-list"></i>
                            <span class="title">Karyawan</span>
                            <span class="selected"></span>
                            <span class="badge badge-success">10</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item start ">
                        <a href="/admin/data-siswa" class="nav-link ">
                            <i class="icon-list"></i>
                            <span class="title">Daftar Siswa</span>
                            <span class="badge badge-success">150</span>
                        </a>
                    </li> --}}
                </ul>
            </li>

            <li class="nav-item @yield('open5')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-info-circle"></i>
                    <span class="title">Informasi</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="/profil2" class="nav-link ">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">Profil</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/visi" class="nav-link ">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">Visi</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a class="nav-link ">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">Misi</span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start ">
                                <a href="/misi/create" class="nav-link ">
                                    <i class="icon-plus"></i>
                                    <span class="title">Buat Misi Baru</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="/misi" class="nav-link ">
                                    <i class="icon-list"></i>
                                    <span class="title">Daftar Misi</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item start ">
                            <a href="/profil" class="nav-link ">
                                <i class="fa fa-chevron-circle-right"></i>
                                <span class="title">Kontak</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    <li class="nav-item start ">
                        <a href="/testimoni" class="nav-link ">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">Testimoni</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start ">
                                <a href="/testimoni/create" class="nav-link ">
                                    <i class="icon-plus"></i>
                                    <span class="title">Buat Testimoni Baru</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="/testimoni" class="nav-link ">
                                    <i class="icon-list"></i>
                                    <span class="title">Daftar Testimoni</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item @yield('open4')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-newspaper-o"></i>
                    <span class="title">Berita</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="/beritas/create" class="nav-link ">
                            <i class="icon-plus"></i>
                            <span class="title">Buat Berita Baru</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin/berita" class="nav-link ">
                            <i class="icon-list"></i>
                            <span class="title">Daftar Berita</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @yield('open6')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-archive"></i>
                    <span class="title">Program</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="/gurudigital/program/create" class="nav-link ">
                                <i class="icon-plus"></i>
                                <span class="title">Buat Program Baru</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/gurudigital/programs" class="nav-link ">
                                <i class="icon-list"></i>
                                <span class="title">Daftar Program</span>
                                <span class="badge badge-success">51</span>
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>
            </li>
            @endif
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
