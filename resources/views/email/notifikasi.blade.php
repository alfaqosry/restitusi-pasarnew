<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Akun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            margin-top: 20px;
            font-size: 16px;
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #888;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>Halo, {{ $user->pedagang->name }}!</h2>
        </div>
        <div class="content">
            <p>Selamat, akun Anda telah berhasil diverifikasi dan diterima!</p>
            <p>Anda sekarang dapat login dan menikmati semua fitur yang tersedia.</p>
            <p>Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami.</p>
        </div>
        <div class="footer">
            <p>Terima kasih telah bergabung dengan kami!</p>
            <p>&copy; {{ date('Y') }} Pasar Kuok. Semua hak dilindungi.</p>
        </div>
    </div>

</body>
</html>
