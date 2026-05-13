<div class="container-fluid">

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h2 class="h3 text-gray-800 mb-0">Data Anggota</h2>
        <small class="text-muted">Kelola data anggota perpustakaan/sistem</small>
    </div>

    <a href="<?= site_url('anggota/tambah'); ?>" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm"></i> Tambah Anggota
    </a>
</div>

<div class="card shadow mb-4">
<div class="card-body">
<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead class="thead-dark">
<tr>
    <th>No</th>
    <th>Nomor Anggota</th>
    <th>Nama</th>
    <th>Telepon</th>
    <th>Email</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>
<?php $no = 1; foreach($anggota as $k): ?>
<tr>

    <!-- Nomor urut -->
    <td><?= $no++; ?></td>

    <!-- Nomor anggota (versi aman) -->
    <td><?= $k->nomor_anggota?></td>

    <!-- Data -->
    <td><?= $k->nama; ?></td>
    <td><?= $k->telepon; ?></td>
    <td><?= $k->email; ?></td>

    <!-- Status -->
    <td>
        <span class="badge badge-success">Aktif</span>
    </td>

    <!-- Aksi -->
    <td>
        <a href="<?= site_url('anggota/edit/'.$k->nomor_anggota); ?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="<?= site_url('anggota/hapus/'.$k->nomor_anggota); ?>" 
           class="btn btn-sm btn-danger"
           onclick="return confirm('Yakin hapus data?')">Hapus</a>
    </td>

</tr>
<?php endforeach; ?>
</tbody>

</table>

</div>
</div>
</div>

</div>