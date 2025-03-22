<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        .receipt-container {
            width: 100%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .receipt-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .receipt-header h2 {
            margin: 0;
        }
        .receipt-details {
            margin-bottom: 20px;
        }
        .receipt-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .receipt-details th, .receipt-details td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .receipt-footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="receipt-container">
    <div class="receipt-header">
        <h2>Bukti Pembayaran Restibusi Pasar Kuok</h2>
        <p>Nomor: {{ $receiptNumber }}</p>
        <p>{{ $paymentDate }}</p>
    </div>

    <div class="receipt-details">
        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $user }}</td>
            </tr>
            <tr>
                <th>Jumlah Pembayaran</th>
                <td>Rp. {{ number_format($amount, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Metode Pembayaran</th>
                <td>{{ $paymentMethod }}</td>
            </tr>
        </table>
    </div>

    <div class="receipt-footer">
        <p>Terima kasih atas pembayaran Anda!</p>
    </div>
</div>

</body>
</html>
