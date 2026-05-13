<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Buku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #000;
        }

        h3 {
            text-align: center;
            margin-bottom: 5px;
        }

        .info {
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th {
            background: #4ca595;
            color: #fff;
            -webkit-print-color-adjust: exact;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        /* TANDA TANGAN */
        .ttd {
            margin-top: 60px;
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }

        .ttd-box {
            text-align: center;
            width: 250px;
        }

        @media print {
            button {
                display: none;
            }
        }
    </style>
</head>

<body>

<h3>Laporan Buku</h3>

<div class="info">
    <?php if($penulis): ?>
        <p><strong>Penulis:</strong> <?= $penulis; ?></p>
    <?php endif; ?>
</div>

<table>
    <tr>
        <th>No</th>
        <th>Kode Buku</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Kategori</th>
        <th>Tahun</th>
        <th>Stok</th>
    </tr>

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
</table>

<!-- TANDA TANGAN -->
<div class="ttd">
    <div class="ttd-box">
        <p>Tangerang, <?= date('d F Y'); ?></p>
        <p><strong>Admin Perpustakaan</strong></p>
        <br><br><br>
        <p><u>(____________________)</u></p>
    </div>
</div>

<script>
    window.print();
</script>

</body>
</html>