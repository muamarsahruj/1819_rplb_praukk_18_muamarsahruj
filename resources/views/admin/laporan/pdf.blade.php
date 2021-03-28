<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{public_path('css/app.css')}}">
    <title>Document</title>
</head>
<body class="bg-white">
    <table class="table table-bordered mt-5" id="dataTables" width="100%">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jumlah meter</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Metode bayar</th>
            <th scope="col">Total bayar</th>
            <th scope="col">Bukti bayar</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $riwayat)
          <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $riwayat->pelanggan->nama_pelanggan }}</td>
            <td>{{ $riwayat->tagihan->jumlah_meter }}</td>
            <td>{{ $riwayat->tgl_pembayaran }}</td>
            <td>{{ $riwayat->metode->nama_metode }}</td>
            <td>Rp. {{ number_format($riwayat->total_bayar) }}</td>
            <td><img src="{{ public_path('upload').'/'.$riwayat->bukti_transaksi }}" alt="Foto Bukti" width="50px"></td>
            <td>
              @if ($riwayat->status == "sedang diproses")
                <span class="badge badge-primary">Sedang Diproses</span>
              @else
                <span class="badge badge-success">Lunas</span>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</body>
</html>