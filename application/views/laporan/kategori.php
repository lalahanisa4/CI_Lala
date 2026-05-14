<div class="container-fluid">

    <h3>Laporan Kategori</h3>

    <a href="<?= site_url('kategori/cetak_kategori'); ?>"
       target="_blank"
       class="btn btn-success btn-sm mb-3">
       Cetak PDF
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>

        <tbody>
            <?php $no=1; foreach($Kategori as $k): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $k->nama_kategori; ?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>

</div>