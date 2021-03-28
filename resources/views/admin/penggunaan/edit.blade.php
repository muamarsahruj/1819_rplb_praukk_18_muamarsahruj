@extends('admin.layouts.app')

@section('title','Edit Penggunaan | E-Electricity')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-body mt-3">
                    <form action="{{ route('penggunaan.update', $penggunaan->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pelanggan_id" class="col-form-label">Pelanggan</label>
                            <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                                <option value="{{$penggunaan->pelanggan->id}}">{{$penggunaan->pelanggan->id}} - {{$penggunaan->pelanggan->nama_pelanggan}}</option>
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>

@endsection