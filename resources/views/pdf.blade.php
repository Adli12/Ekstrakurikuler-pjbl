<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Data Absensi</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #444;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f3f3f3;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <h2>Data Absensi</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
        <tbody>
            @foreach ($anggotas as $index => $anggota)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $anggota->nama_anggota }}</td>
                    <td>{{ $anggota->kelas }}</td>
                    <td>{{ $anggota->keterangan_temp }}</td>
                    <td>{{ $anggota->tanggal_temp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>