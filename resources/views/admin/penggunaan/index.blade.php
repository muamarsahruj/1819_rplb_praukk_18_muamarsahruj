@extends('admin.layouts.app')
  
@section('title','Penggunaan | E-Electricity')
  
@section('content')
<div class="container">
  {{-- @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif --}}
  <div class="row">
    <div class="col-lg-12">
      <h3><span>Penggunaan</span></h3>
      <div class="card card-body">
        <div class="mb-3">
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered mt-5 text-center" id="dataTables" width="100%">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Pelanggan</th>
                  <th scope="col">Bulan</th>
                  <th scope="col">Tahun</th>
                  <th scope="col">Meter awal</th>
                  <th scope="col">Meter akhir</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data_penggunaan as $penggunaan)
                <tr>
                  <td scope="row">{{ $loop->iteration }}</td>
                  <td scope="row">{{ $penggunaan->pelanggan->nama_pelanggan }}</td>
                  <td scope="row">{{ $penggunaan->bulan }}</td>
                  <td scope="row">{{ $penggunaan->tahun }}</td>
                  <td scope="row">{{ $penggunaan->meter_awal }}</td>
                  <td scope="row">{{ $penggunaan->meter_akhir }}</td>
                  <td>
                    <a href="#" class="btn btn-primary btn-md">
                      <i class="fas fa-eye text-white"></i>
                    </a>
                          
                    <a href="{{ route('penggunaan.edit', $penggunaan->id) }}" class="btn btn-warning btn-md">
                      <i class="fas fa-pen text-white"></i>
                    </a>
                          
                    <a href="{{ route('penggunaan.delete', $penggunaan->id) }}" class="btn btn-danger btn-md">
                      <i class="fas fa-trash text-white"></i>
                    </a>
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
              
      <form action="{{ route('penggunaan.create') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-body">
          <input type="hidden" name="id" value="{{ $id }}">
            <div class="form-group">
              <label for="pelanggan_id" class="col-form-label">Pelanggan</label>
              <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                <option>--- Pelanggan ---</option>
                @foreach ($pelanggan as $data)
                  <option value="{{$data->id}}">{{$data->id}} - {{$data->nama_pelanggan}}</option>
                @endforeach
              </select>
            </div>
                    
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Bulan</label>
              <input type="text" class="form-control" id="recipient-name" name="bulan" placeholder="Enter bulan" required>
            </div>
            
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Tahun</label>
              <input type="text" class="form-control" id="recipient-name" name="tahun" placeholder="Enter tahun" required>
            </div>
            
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Meter awal</label>
              <input type="text" class="form-control" id="recipient-name" name="meter_awal" placeholder="Enter meter awal" required>
            </div>
            
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Meter akhir</label>
              <input type="text" class="form-control" id="recipient-name" name="meter_akhir" placeholder="Enter meter akhir" required>
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