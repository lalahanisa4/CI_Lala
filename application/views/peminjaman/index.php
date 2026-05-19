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
                <?php if($this->session->flashdata('success')): ?>

<div class="alert alert-success alert-dismissible fade show">

    <?= $this->session->flashdata('success'); ?>

    <button type="button"
            class="close"
            data-dismiss="alert">

        <span>&times;</span>

    </button>

</div>

<?php endif; ?>


<?php if($this->session->flashdata('error')): ?>

<div class="alert alert-danger alert-dismissible fade show">

    <?= $this->session->flashdata('error'); ?>

    <button type="button"
            class="close"
            data-dismiss="alert">

        <span>&times;</span>

    </button>

</div>

<?php endif; ?>
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
        <?php
        $today = date('Y-m-d');
        $selisih = strtotime($today) - strtotime($d->tanggal_jatuh_tempo);
        $terlambat = $selisih > 0
            ? floor($selisih / 86400)
            : 0;
            ?>

            <?php if($d->status =='dipinjam'): ?>
                <a href="<?= site_url('peminjaman/kembali/'). $d->id; ?>" class="btn btn-success btn-sm">
                    kembalikan
                </a>

                <!--- Tombol WA --->
                <a href="<?= site_url('whatsapp/kirim_notifikasi/'.$d->id); ?>"
                class="btn btn-warning btn-sm">
            <i class="fab fa-whatsapp"></i>
            Kirim WA
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