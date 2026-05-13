<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Anggota</title>

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

<h3>Laporan Data Anggota</h3>

<div class="info">
    <p>Data seluruh anggota perpustakaan</p>
</div>

<table>
    <tr>
        <th>No</th>
        <th>No Anggota</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Tanggal Daftar</th>
    </tr>

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