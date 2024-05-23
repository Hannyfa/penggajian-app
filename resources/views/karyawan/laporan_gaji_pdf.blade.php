<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Laporan Gaji Karyawan</h1>
    <p>Nama: {{ $karyawan->nama }}</p>
    <p>Alamat: {{ $karyawan->alamat }}</p>
    <p>NIP: {{ $karyawan->nip }}</p>
    <p>Departemen: {{ $karyawan->departemen }}</p>
    <p>Jabatan: {{ $karyawan->jabatan }}</p>
    <p>Total Gaji: Rp. {{ $total_gaji }}</p>
</body>
</html>
