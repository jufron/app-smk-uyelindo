<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bukti Pendaftaran Siswa Baru</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; margin: 30px; }
        .header { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        td { padding: 6px; vertical-align: top; }
        .footer { text-align: center; margin-top: 40px; font-size: 12px; color: #555; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Bukti Pendaftaran Siswa Baru</h2>
        <p>SMK Uyelindo Kupang</p>
        <hr>
    </div>
    <table>
        <tr>
            <td><strong>No. Pendaftaran</strong></td>
            <td>: {{ $no_pendaftaran }}</td>
        </tr>
        <tr>
            <td><strong>Nama Lengkap</strong></td>
            <td>: {{ $nama_lengkap }}</td>
        </tr>
        <tr>
            <td><strong>Nama Panggilan</strong></td>
            <td>: {{ $nama_panggila }}</td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td>: {{ $email }}</td>
        </tr>
        <tr>
            <td><strong>NISN</strong></td>
            <td>: {{ $nisn }}</td>
        </tr>
        <tr>
            <td><strong>Tanggal Pendaftaran</strong></td>
            <td>: {{ $tanggal_daftar }}</td>
        </tr>
    </table>

    <div class="footer">
        <hr>
        <p>Terima kasih telah mendaftar. Simpan bukti ini untuk keperluan verifikasi.</p>
    </div>
</body>
</html>
