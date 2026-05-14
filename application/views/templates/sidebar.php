<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="acordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-0">
            <i class ="fas fa-university"></i>
</div>
        <div class="sidebar-brand-text mx-3">Perpustakaan</div>
</a>
<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('dashboard') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
</a>
</li>

<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('kategori') ?>">
        <i class="fas fa-tags"></i>
        <span>Kategoi</span>
</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= site_url('anggota') ?>">
        <i class="fas fa-user-friends"></i>
        <span>Anggota</span>
</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= site_url('buku') ?>">
        <i class="fas fa-book-open"></i>
        <span>Buku</span>
</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= site_url('peminjaman') ?>">
        <i class="fas fa-handshake"></i>
        <span>Peminjaman</span>
</a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan"
        aria-expanded="true" aria-controls="collapseLaporan">
        
        <i class="fas fa-chart-bar"></i>
        <span>Laporan</span>
    </a>

    <div id="collapseLaporan" class="collapse" aria-labelledby="headingLaporan"
        data-parent="#acordionSidebar">

        <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">Data Laporan</h6>


            <a class="collapse-item" href="<?= site_url('laporan/buku') ?>">
                <i class="fas fa-book mr-2 text-primary"></i>
                Laporan Buku
            </a>

             <a class="collapse-item" href="<?= site_url('laporan/kategori') ?>">
                <i class="fas fa-layer-group mr-2 text-warning"></i>
                Laporan Kategori
            </a>

            <a class="collapse-item" href="<?= site_url('laporan/anggota') ?>">
                <i class="fas fa-users mr-2 text-success"></i>
                Laporan Anggota
            </a>

            <a class="collapse-item" href="<?= site_url('laporan/peminjaman') ?>">
                <i class="fas fa-handshake mr-2 text-warning"></i>
                Laporan Peminjaman
            </a>

        </div>
    </div>
</li>
<hr class="sidebar-divider d-none d-md-block">

</ul>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
