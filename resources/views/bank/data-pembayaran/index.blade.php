@extends('bank.layouts.app')
  
@section('title','Data Pembayaran | E-Electricity')

@section('content')
<div class="container">
  {{-- @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif --}}
  <div class="row">
    <div class="col-lg-12">
      <h3><span>Data pembayaran</span></h3>
      <div class="card card-body">
        {{-- <div class="mb-3">
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
        </div> --}}
        <div class="table-responsive">
          <table class="table table-bordered mt-5 text-center" id="dataTables" width="100%">
              <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">TAGIHAN</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">BAYAR</th>
                    <th scope="col">METODE</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTION</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data_pembayaran as $pembayaran)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td scope="row">{{ $pembayaran->pelanggan->nama_pelanggan }}</td>
                    <td scope="row">Rp. {{ number_format($pembayaran->tagihan->jumlah_bayar) }}</td>
                    <td scope="row">{{ $pembayaran->tgl_pembayaran }}</td>
                    <td scope="row">Rp. {{ number_format($pembayaran->total_bayar) }}</td>
                    <td scope="row">{{ $pembayaran->metode->nama_metode }}</td>
                    <td scope="row">{{ $pembayaran->status }}</td>
                    <td><a class="btn btn-primary" href="{{ route('verifikasi', $pembayaran->id) }}" role="button">Verifikasi</a></td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            
      <form action="{{ route('tarif.store') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Daya</label>
              <input type="text" class="form-control" id="recipient-name" name="daya" placeholder="Enter daya" required>
            </div>

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Tarif perkWh</label>
              <input type="number" class="form-control" id="recipient-name" name="tarif_perkwh" placeholder="Enter tarif" required>
            </div>
                  
                  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      </div>
    </div>
</div>
@include('sweetalert::alert')

@endsection