<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Restitusi Pasar Kuok</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <h3>Laporan Restitusi Pasar Kuok - Bulan {{ $bulan . '-' . $tahun }}</h3>

    <table class="table table-bordered text-nowrap border-bottom">
        <thead>
            <tr>
                <th class="wd-15p border-bottom-0">Nama Pedagang</th>
                @foreach ($tanggal as $tgl)
                <th class="wd-10p border-bottom-0">{{ $tgl }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->pedagang->name }}</td>
                @php $tdCount = 0; @endphp
                @foreach ($tagihan as $tghn)
                @if ($user->id == $tghn->user_id)
                <td>Rp. {{ number_format($tghn->amount, 0, ',', '.') }}</td>
                @php $tdCount++; @endphp
                @endif
                @endforeach
                @for ($i = $tdCount; $i < count($tanggal); $i++)
                <td></td>
                @endfor
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
