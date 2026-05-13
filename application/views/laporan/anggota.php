<div class="container-fluid">

    <h3>Laporan Anggota</h3>

    <a href="<?= site_url('anggota/cetak_anggota'); ?>"
       target="_blank"
       class="btn btn-success btn-sm mb-3">
       Cetak PDF
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>No Anggota</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Tanggal Daftar</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; foreach($data as $d): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d->nomor_anggota; ?></td>
                <td><?= $d->nama; ?></td>
                <td><?= $d->alamat; ?></td>
                <td><?= $d->telepon; ?></td>
                <td><?= $d->email; ?></td>
                <td><?= $d->tanggal_daftar; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>