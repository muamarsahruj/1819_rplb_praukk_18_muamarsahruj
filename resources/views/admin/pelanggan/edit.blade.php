@extends('admin.layouts.app')

@section('title','Edit Pelanggan  | E-Electricity')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-body mt-3">
                    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <label for="pelanggan_id" class="col-form-label">Daya</label>
                            <select name="tarif_id" id="tarif_id" class="form-control">
                                <option value="{{$pelanggan->tarif->id}}">{{$pelanggan->tarif->id}} - {{$pelanggan->tarif->daya}}</option>
                              @foreach ($tarif as $data)
                                <option value="{{$data->id}}">{{$data->id}} - {{$data->daya}}</option>
                              @endforeach
                            </select>
                        </div>
                          
                          <div class="form-group">
                            <label for="no_meter" class="col-form-label">No Meter</label>
                            <input type="number" class="form-control" id="no_meter" name="no_meter" placeholder="Enter Nomor Meter" value="{{ $pelanggan->no_meter}}" required>
                          </div>
                        
                          <div class="form-group">
                            <label for="nama_pelanggan" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Enter Nama" value="{{ $pelanggan->nama_pelanggan}}" required>
                          </div>        
                          <div class="form-group">
                            <label for="alamat" class="col-form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control">{{ $pelanggan->alamat}}</textarea>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>

@endsection