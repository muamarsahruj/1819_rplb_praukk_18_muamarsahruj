@extends('pelanggan.layouts.app')
  
@section('title','Dashboard | E-Electricity')
  
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
          @endif
          <div class="card card-body">
            <div class="mb-3">
              <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="alert-heading">Peringatan!</h4>
                <p>Apabila anda sudah membayar tagihan silahkan untuk menunggu konfirmasi pembayaran dari pihak bank, apabila di setujui maka status pembayaran akan berubah lunas, terimakasih sudah mempercayai E-Electricity</p>
                <hr>
                <p class="mb-0">Salam Admin E-Electricity</p>
              </div>
              <a href="{{route('riwayat-pembayaran-pdf')}}" class="btn btn-md btn-primary mb-4" target="_blank"><i class="fas fa-file-download mr-3"></i>Export PDF</a>
            </div>
            <div class="table-responsive">
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
                      <td><img src="{{ asset('/upload/'.$riwayat->bukti_transaksi.'') }}" alt="" width="50px"></td>
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
              
      <form action="/riwayat/create" method="post">
        @csrf
        <div class="modal-body">
            <div class="form-group">
              <label for="nama_pelanggan" class="col-form-label">Nama pelanggan</label>
              <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan nama" required>
            </div>  
            
            <div class="form-group">
              <label for="jumlah_meter" class="col-form-label">Jumlah meter</label>
              <input type="text" class="form-control" id="jumlah_meter" name="jumlah_meter" placeholder="Enter jumlah meter" required>
            </div>
            
            <div class="form-group">
              <label for="tgl_pembayaran" class="col-form-label">Tanggal</label>
              <input type="number" class="form-control" id="tgl_pembayaran" name="tgl_pembayaran" placeholder="Enter Tanggal" required>
            </div>
            
            <div class="form-group">
              <label for="metode_bayar" class="col-form-label">Metode bayar</label>
              <input type="text" class="form-control" id="metode_bayar" name="metode_bayar" placeholder="Enter metode bayar" required>
            </div>        
            
            <div class="form-group">
              <label for="total_bayar" class="col-form-label">Total bayar</label>
              <input type="text" class="form-control" id="total_bayar" name="total_bayar" placeholder="Enter total bayar" required>
            </div>        
            
            <div class="form-group">
              <label for="status" class="col-form-label">Status</label>
              <input type="text" class="form-control" id="status" name="status" placeholder="Enter status" required>
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
@endsection