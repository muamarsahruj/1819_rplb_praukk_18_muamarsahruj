@extends('bank.layouts.app')

@section('title','Verifikasi Bank | E-Electricity')

@section('content')

<div class="container">
<p><h3>VERIFIKASI PEMBAYARAN</h3>
<form action="{{ route('change', $pembayaran->id) }}" method="POST">
    @csrf
    <fieldset disabled>
    <div class="mb-3">
        <label for="disabledSelect" class="form-label">NO</label>
        <input type="text" class="form-control" placeholder="1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">NAMA</label>
        <input type="text" class="form-control" placeholder="{{ $pembayaran->pelanggan->nama_pelanggan }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">TAGIHAN</label>
        <input type="text" class="form-control" placeholder="Rp. {{ number_format($pembayaran->tagihan->jumlah_bayar) }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">TANGGAL</label>
        <input type="text" class="form-control" placeholder="{{ $pembayaran->tgl_pembayaran }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">BAYAR</label>
        <input type="text" class="form-control" placeholder="Rp. {{ number_format($pembayaran->total_bayar) }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">METODE</label>
        <input type="text" class="form-control" placeholder="{{ $pembayaran->metode->nama_metode }}">
    </div>
    </fieldset>

    <form action="">
    <div class="form-group">
    <label for="exampleFormControlSelect1">STATUS</label>
    <select name="status" class="form-control" id="exampleFormControlSelect1" onchange="javascript:this.form.submit()">
      <option value="sedang diproses" @if($pembayaran->status == "sedang diproses") selected @endif>Proses</option>
      <option value="lunas" @if($pembayaran->status == "lunas") selected @endif>Lunas</option>  
    </select>
    </form>

    </div>
    <div class="image">
    <img src="{{url('upload/'.$pembayaran->bukti_transaksi)}}" class="img-thumbnail" width="250px;" height="300px;">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Verifikasi</button>
    </form>
</div>

@endsection