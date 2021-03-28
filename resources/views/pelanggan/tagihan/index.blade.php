@extends('pelanggan.layouts.app')
  
@section('title','Dashboard | E-Electricity')
  
@section('content')
<div class="container">
  <div class="alert alert-info" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="alert-heading">Peringatan !</h4>
    <p>Silahkan Masukkan nomer meter anda dengan benar !</p>
  </div>
  <div class="card shadow mb-3">
    <div class="card-header bg-white">
        <div class="row">
            <div class="col">
                <span style="font-size: 18px;">Cari Tagihan</span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="#" method="POST">
            @csrf
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Nomor meter</label>
                <div class="col-5 pr-0">
                    <input type="text" class="form-control" name="meter">
                </div>
                <div class="col-1 pl-0">
                    <button class="btn btn-primary" name="cari">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

@if (isset($_POST['cari']))
<div class="row">
  <div class="col-lg-12">
    <div class="card card-body {{ !isset($_POST['cari']) ? 'd-none' : '' }} shadow">
      <div class="mb-3">
      </div>
      <div class="table-responsive">
        <table class="table table-bordered mt-5 text-center" id="dataTables" width="100%">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Pelanggan</th>
              <th scope="col">Bulan</th>
              <th scope="col">Tahun</th>
              <th scope="col">Jumlah meter</th>
              <th scope="col">Jumlah bayar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($detail_tagihan  as $data)
              <td scope="row">{{ $loop->iteration }}</td>
              <td scope="row">{{ $pelanggan->nama_pelanggan }}</td>
              <td scope="row">{{ $data->bulan }}</td>
              <td scope="row">{{ $data->tahun }}</td>
              <td scope="row">{{ $data->jumlah_meter }}</td>
              <td scope="row">Rp. {{ number_format($data->jumlah_bayar) }}</td>
            </tr>
            @endforeach
            <tr>
              <td colspan="7" align="right">
                <a href="{{ route('tagihan.detail', $data->id) }}" class="btn btn-primary">Bayar</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endif

@endsection