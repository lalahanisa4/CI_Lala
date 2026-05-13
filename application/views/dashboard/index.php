<h1 class="h3 mb-4 font-weight-bold text-gray-800">
    📊 Dashboard Statistik Perpustakaan
</h1>

<div class="row">

    <!-- Kategori -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow-sm h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">

                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Kategori
                        </div>

                        <div class="h4 mb-0 font-weight-bold text-gray-800">
                            <?= $total_kategori; ?>
                        </div>

                        <small class="text-muted">Data kategori</small>
                    </div>

                    <div class="col-auto">
                        <i class="fas fa-tags fa-2x text-primary opacity-75"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Anggota -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow-sm h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">

                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Anggota
                        </div>

                        <div class="h4 mb-0 font-weight-bold text-gray-800">
                            <?= $total_anggota; ?>
                        </div>

                        <small class="text-muted">Member perpustakaan</small>
                    </div>

                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-success opacity-75"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- Grafik -->
<div class="row">

    <div class="col-xl-8 col-lg-8">
        <div class="card shadow-sm mb-4">

            <div class="card-header py-3 bg-white">
                <h6 class="m-0 font-weight-bold text-primary text-center">
                    📈 Grafik Data Perpustakaan
                </h6>
            </div>

            <div class="card-body">
                <div style="position: relative; height:320px;">
                    <canvas id="chartDashboard"></canvas>
                </div>
            </div>

        </div>
    </div>

</div>