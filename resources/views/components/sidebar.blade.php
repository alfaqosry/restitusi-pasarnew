<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                <img src="../assets/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="../assets/images/brand/icon-white.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="../assets/images/brand/icon-dark.png" class="header-brand-img light-logo" alt="logo">
                <img src="../assets/images/brand/logo-dark.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">

                @role('admin')
                    @if (Auth()->user()->is_active == true)
                        <li class="sub-category">
                            <h3>Main</h3>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide"
                                href="{{ route('dashboard.index') }}"><i class="side-menu__icon fe fe-home"></i><span
                                    class="side-menu__label">Dashboard</span></a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('toko.index') }}"><i
                                    class="side-menu__icon fe fe-shopping-bag"></i><span
                                    class="side-menu__label">Toko</span></a>
                        </li>


                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide"
                                href="{{ route('pedagang.index') }}"><i class="side-menu__icon fe fe-users"></i><span
                                    class="side-menu__label">Pedagang</span></a>
                        </li>
                    
                       
                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide"
                                href="{{ route('transaction.index') }}"><i
                                    class="side-menu__icon fe fe-credit-card"></i><span
                                    class="side-menu__label">Transaksi</span></a>
                        </li>
                    

                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide"
                                href="{{ route('transaction.tagihanall') }}"><i class="side-menu__icon fe fe-file-text"></i>
                                <span class="side-menu__label">Tagihan</span></a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide"
                                href="{{ route('laporankeuangan.bulanan') }}"><i
                                    class="side-menu__icon fe fe-file-text"></i>
                                <span class="side-menu__label">Laporan Keuangan</span></a>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide"
                                href="{{ route('verifikasi.verifikasiall') }}"><i
                                    class="side-menu__icon fe fe-file-text"></i>
                                <span class="side-menu__label">Daftar Pengajuan</span></a>
                        </li>
                    @else
                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide"
                                href="{{ route('verifikasi.pengajuan') }}"><i class="side-menu__icon fe fe-file-text"></i>
                                <span class="side-menu__label">Verifikasi Akun</span></a>
                        </li>
                    @endif

                @endrole

                @role('pedagang')

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                        href="{{ route('transaction.tagihbyid', Auth()->user()->id) }}"><i
                            class="side-menu__icon fe fe-file-text"></i>
                        <span class="side-menu__label">Tagihan</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                        href="{{ route('sewatempat.getsewabyid', Auth()->user()->id) }}"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Tempat Dagangan
                            Saya</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                        href="{{ route('sewatempat.index') }}"><i class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label">Sewa Tempat</span></a>
                </li>
                @endrole

             
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
</div>
