<div class="container-fluid">
<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h2 class="h3 text-gray-800 mb-0">Data Kategori</h2>
        <small class="text-muted">Kelola data kategori</small>
    </div>

    <a href="<?= site_url('kategori/tambah'); ?>" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm"></i> Tambah Kategori
    </a>
</div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead class="thead-dark">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
<?php $no=1; foreach($kategori as $k): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $k->nama_kategori; ?></td>
        <td>
             <a href="<?= site_url('kategori/edit/'.$k->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('kategori/hapus/'.$k->id); ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('yakin?')">Hapus</a>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>