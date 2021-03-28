@extends('bank.layouts.app')

@section('title','Dashboard | E-Electricity')

@section('content')
  <div class="container">
      <h3><span>Dasboard</span></h3>  
    <div class="row py-4">
      <div class="col-md-3">
        <div class="card">
          <div class="card-header text-white" style="background-color: #31B9E4;">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-project-diagram fa-3x"></i>
              </div>
              <div class="col mt-4">
                <h3 class="display-5"></h3>
                <h6>Pembayaran</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="pelanggan" class="nav-link">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header text-white" style="background-color: #FF555F;">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-money-check fa-3x"></i>
              </div>
              <div class="col mt-4">
                <h3 class="display-5"></h3>
                <h6>Riwayat pembayaran</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="penggunaan" class="nav-link">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header text-white" style="background-color: #686868;">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-wallet fa-3x"></i>
              </div>
              <div class="col mt-4">
                <h3 class="display-5"></h3>
                <h6>Laporan pembayaran</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="tagihan" class="nav-link">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-body">
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
    @foreach($riwayat as $v_riwayat_pembayaran)
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