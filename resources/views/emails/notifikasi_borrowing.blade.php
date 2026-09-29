<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { width: 80%; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; }
        .header { background: #4a90e2; color: white; padding: 10px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { padding: 20px; }
        .status { font-weight: bold; color: #4a90e2; text-transform: uppercase; }
        .footer { font-size: 12px; color: #777; margin-top: 20px; border-top: 1px solid #ddd; padding-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Notifikasi Perpustakaan</h2>
        </div>
        <div class="content">
            <p>Halo, <strong>{{ $details['nama'] }}</strong>,</p>
            <p>Informasi terbaru mengenai peminjaman buku Anda:</p>
            <ul>
                <li>Judul Buku: <strong>{{ $details['judul_buku'] }}</strong></li>
                <li>Status: <span class="status">{{ $details['status'] }}</span></li>
            </ul>
            <p>{{ $details['pesan'] }}</p>
        </div>
        <div class="footer">
            <p>Ini adalah pesan otomatis, mohon tidak membalas email ini.<br>
            &copy; {{ date('Y') }} Perpustakaan Digital</p>
        </div>
    </div>
</body>
</html>