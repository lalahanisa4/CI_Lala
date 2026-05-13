<div class="container-fluid">
    <h3>Laporan Buku</h3>
    <form method="get" action="<?= site_url('laporan/buku'); ?>">
        <select name="nama_penulis" class="form-control d-inline w-auto">
            <option value="">-- Pilih Penulis --</option>
            <?php foreach($list_penulis as $p): ?>
            <option value="<?= $p->nama_penulis ?>" 
                <?= ($penulis == $p->nama_penulis) ? 'selected' : '' ?>>
                <?= $p->nama_penulis ?>
            </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary btn-sm">Filter</button>
        <a href="<?= site_url('laporan/buku'); ?>" class="btn btn-secondary btn-sm">Reset</a>
    </form>

    <br>
    <a href="<?= site_url('buku/cetak_buku?penulis='.$penulis); ?>"
   target="_blank"
   class="btn btn-success btn-sm">
   Cetak PDF
</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Tahun</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($data as $d): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d->kode_buku; ?></td>
                <td><?= $d->judul; ?></td>
                <td><?= $d->nama_penulis; ?></td>
                <td><?= $d->nama_kategori; ?></td>
                <td><?= $d->tahun; ?></td>
                <td><?= $d->stok; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>