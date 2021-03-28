@extends('bank.layouts.app')

@section('title','Riwayat Pembayaran Bank | E-Electricity')

@section('content')

<div class="container">
 <div class="row">
    <div class="col-lg-12">
      <h3><span>Riwayat pembayaran</span></h3>
      <div class="card card-body">
        {{-- <div class="mb-3">
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
        </div> --}}
        <div class="table-responsive">
          <table class="table table-bordered mt-5 text-center" id="dataTables" width="100%">
              <thead class="thead-dark">
             <tr>
                 <th>No</th>
                 <th>NAMA</th>
                 <th>TANGGAL</th>
                 <th>TOTAL BAYAR</th>
                 <th>METODE PEMBAYARAN</th>
                 <th>STATUS</th>
             </tr>
         </thead>
         <tbody>
         @foreach($v_riwayatpembayaran as $v_riwayat_pembayaran)
             <tr>
                 <td scope="row">{{ $loop->iteration }}</td>
                 <td scope="row">{{ $v_riwayat_pembayaran->nama_pelanggan }}</td>
                 <td scope="row">{{ $v_riwayat_pembayaran->tgl_pembayaran }}</td>
                 <td scope="row">Rp. {{ number_format($v_riwayat_pembayaran->total_bayar) }}</td>
                 <td scope="row">{{ $v_riwayat_pembayaran->metode->nama_metode }}</td>
                 <td scope="row">{{ $v_riwayat_pembayaran->status }}</td>
             </tr>
         @endforeach
         </tbody>
     </table>
     </div>
     </div>
 </div>
@endsection