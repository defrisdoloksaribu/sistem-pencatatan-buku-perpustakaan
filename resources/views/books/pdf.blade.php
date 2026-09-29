<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Buku</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <h2>Laporan Data Buku Perpustakaan</h2>
    <p>Tanggal Cetak: {{ date('d-m-Y') }}</p>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $index => $book)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->penulis }}</td>
                <td>{{ $book->penerbit }}</td>
                <td>{{ $book->tahun_terbit }}</td>
                <td>{{ $book->stok }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>