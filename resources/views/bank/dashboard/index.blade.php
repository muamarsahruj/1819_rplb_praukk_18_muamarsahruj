@extends('bank.layouts.app')

@section('title','Dashboard | E-Electricity')

@section('content')
  <div class="container">
      <h3><span><b>Dasboard</b></span></h3>

      <div class="alert alert-primary" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="alert-heading">Hallo! {{ Auth::user()->nama_user }} </h4>
        <hr>
        <p>Selamat datang di Aplikasi E-Electricity... Tugas kamu diaplikasi ini untuk men-konfirmasi pembayaran si pelanggan. Setelah kamu konfirmasi, data pembayaran nya akan masuk ke admin lohh! Jadi kami harapkan untuk teliti dalam men-konfirmasi pembayaran nya ya... </p>
        <hr>
        <p class="mb-0">Salam Hangat dari Admin E-Electricity</p>

      </div>

    <div class="row py-4">
      <div class="col-md-3">
        <div class="card">
          <div class="card-header text-white" style="background-color: #31B9E4;">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-dollar-sign fa-3x"></i>
              </div>
              <div class="col mt-2">
                <h3 class="display-2"></h3>
                <h6>Data Pembayaran</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="pembayaran" class="nav-link">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
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
              <div class="col mt-2">
                <h3 class="display-2"></h3>
                <h6>Riwayat pembayaran</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="riwayat-pembayaran-bank" class="nav-link">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header text-white" style="background-color: #686868;">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-address-card fa-3x"></i>
              </div>
              <div class="col mt-4">
                <h3 class="display-5"></h3>
                <h6>Profile Bank</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="profile" class="nav-link">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header text-white" style="background-color: #58D68D;">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-chart-bar fa-3x"></i>
              </div>
              <div class="col mt-4">
                <h3 class="display-5"></h3>
                <h6>Log Activity</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="log" class="nav-link">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h3><span><b>Riwayat Pembayaran</b></span></h3>
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
            <td>
                @if ($v_riwayat_pembayaran->status == "sedang diproses")
                <span class="badge badge-primary">Sedang Diproses</span>
              @else
                <span class="badge badge-success">Lunas</span>
              @endif
            </td>
        </tr>
    @endforeach
        </tbody>
      </table>
      </div>
    </div>
  </div>
@endsection
