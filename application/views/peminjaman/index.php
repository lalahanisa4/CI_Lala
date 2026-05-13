<div class="container-fluid">
    
<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h2 class="h3 text-gray-800 mb-0">Data Peminjaman</h2>
        <small class="text-muted">Kelola data Peminjaman Buku</small>
    </div>

    <a href="<?= site_url('peminjaman/tambah'); ?>" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm"></i> Tambah Peminjaman
    </a>
</div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead class="thead-dark">
    <tr>
        <th>No</th>
        <th>Kode peminjaman</th>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
<?php $no=1; foreach($data as $d): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $d->kode_peminjaman; ?></td>
        <td><?= $d->nama; ?></td>
        <td><?= $d->tanggal_pinjam; ?></td>
        <td><?= $d->status; ?></td>
        <td>
            <?php if($d->status =='dipinjam'): ?>
                <a href="<?= site_url('peminjaman/kembali/'). $d->id; ?>" class="btn btn-success btn-sm">
                    kembalikan
                </a>
        </td>
        <?php endif; ?>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>