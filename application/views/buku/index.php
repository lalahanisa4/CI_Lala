<div class="container-fluid">
<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h2 class="h3 text-gray-800 mb-0">Data Buku</h2>
        <small class="text-muted">Kelola data buku</small>
    </div>

    <a href="<?= site_url('buku/tambah'); ?>" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm"></i> Tambah Buku
    </a>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php $no=1; foreach($buku as $b): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $b->kode_buku; ?></td>
                        <td><?= $b->judul; ?></td>
                        <td><?= $b->nama_penulis; ?></td>
                        <td><?= $b->nama_kategori; ?></td> <!-- hasil JOIN -->
                        <td><?= $b->stok; ?></td>
                        <td>
                            <a href="<?= site_url('buku/edit/'.$b->id_buku); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('buku/hapus/'.$b->id_buku); ?>" 
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