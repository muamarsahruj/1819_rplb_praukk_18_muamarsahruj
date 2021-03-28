@extends('admin.layouts.app')
  
@section('title','Tagihan | E-Electricity')
  
@section('content')
<div class="container">
  {{-- @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif --}}
  <div class="row">
    <div class="col-lg-12">
      <h3><span>Tagihan</span></h3>
      <div class="card card-body">
        {{-- <div class="mb-3">
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
        </div> --}}
        <div class="table-responsive">
            <table class="table table-bordered mt-5 text-center" id="dataTables" width="100%">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Pelanggan</th>
                  <th scope="col">Bulan</th>
                  <th scope="col">Tahun</th>
                  <th scope="col">Jumlah Meter</th>
                  <th scope="col">Jumlah Bayar</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data_tagihan as $tagihan)
                <tr>
                  <td scope="row">{{ $loop->iteration }}</td>
                  <td scope="row">{{ $tagihan->pelanggan->nama_pelanggan }}</td>
                  <td scope="row">{{ $tagihan->bulan }}</td>
                  <td scope="row">{{ $tagihan->tahun }}</td>
                  <td scope="row">{{ $tagihan->jumlah_meter }}</td>
                  <td scope="row">Rp. {{ number_format($tagihan->jumlah_bayar) }}</td>
                  <td scope="row">{{ $tagihan->status }}</td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection