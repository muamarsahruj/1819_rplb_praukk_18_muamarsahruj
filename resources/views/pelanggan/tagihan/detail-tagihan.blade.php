@extends('pelanggan.layouts.app')
  
@section('title','Detail Tagihan | E-Electricity')
  
@section('content')
<div class="container">
  <div class="card shadow mb-3">
    <div class="card-header bg-white">
        <div class="row">
            <div class="col">
                <span style="font-size: 18px;">Pembayaran</span></span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('bayar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Nomor meter</label>
                <div class="col-5 pr-0">
                    <input type="text" class="form-control" name="meter" value="{{ $data->pelanggan->no_meter }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-5 pr-0">
                    <input type="text" class="form-control" name="nama_pelanggan" value="{{ $data->pelanggan->nama_pelanggan }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Bulan</label>
                <div class="col-5 pr-0">
                    <input type="text" class="form-control" name="bulan_bayar" value="{{ $data->bulan }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Tahun</label>
                <div class="col-5 pr-0">
                    <input type="text" class="form-control" name="tahun_bayar" value="{{ $data->tahun }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Jumlah Meter</label>
                <div class="col-5 pr-0">
                    <input type="text" class="form-control" name="jumlah_meter" value="{{ $data->jumlah_meter }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                <div class="col-5 pr-0">
                    <input type="text" class="form-control" name="jumlah_bayar" value="{{ $data->jumlah_bayar }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Biaya Admin</label>
                <div class="col-5 pr-0">
                    <input type="text" class="form-control" name="biaya_admin" value="2000" readonly >
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Total Bayar</label>
                <div class="col-5 pr-0">
                    <input type="text" class="form-control" name="total_bayar" value="{{ $data->jumlah_bayar + 2000 }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                <div class="col-5 pr-0">
                    <select class="custom-select" name="metode">
                        @foreach($metode as $m)
                        <option value="{{ $m->id }}">{{ $m->nama_metode }}</option>
                        @endforeach
                      </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                <div class="col-5 pr-0">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="bukti_transaksi">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="tagihan_id" value="{{ $data->id }}">
            <input type="hidden" name="pelanggan_id" value="{{ $data->pelanggan_id }}">

            <button class="btn btn-success">Bayar</button>
        </form>
    </div>
</div>


@endsection