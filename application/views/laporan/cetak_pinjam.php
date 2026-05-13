<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Peminjaman</title>

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

    <h3>Laporan Peminjaman</h3>

    <div class="info">
        <?php if($bulan): ?>
            <p><strong>Bulan:</strong> <?= date('F Y', strtotime($bulan.'-01')); ?></p>
        <?php endif; ?>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>Kode Peminjaman</th>
            <th>Nama Anggota</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Jatuh Tempo</th>
            <th>Status</th>
        </tr>

        <?php $no = 1; foreach($data as $d): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->kode_peminjaman; ?></td>
            <td><?= $d->nama; ?></td>
            <td><?= $d->tanggal_pinjam; ?></td>
            <td><?= $d->tanggal_jatuh_tempo; ?></td>
            <td><?= $d->status; ?></td>
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