<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Kategori</title>

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
            text-align: center;
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
    </style>
</head>

<body>

<h3>Laporan Data Kategori</h3>

<table>
     <tr>
        <th>No</th>
        <th>Nama Kategori</th>
    </tr>

    <?php $no=1; foreach($kategori as $k): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $k->nama_kategori; ?></td>
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