@extends('pelanggan.layouts.app')

@section('title','Dashboard | E-Electricity')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-body mt-3">
                    <form action="{{ route('tarif.update', $tarif->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputPassword1">Daya</label>
                          <input type="text" class="form-control" name="daya" id="exampleInputPassword1" value="{{ $tarif->daya }}">
                        </div>
                        
                        <div class="form-group">
                          <label for="exampleInputPassword1">Golongan tarif</label>
                          <input type="text" class="form-control" name="daya" id="exampleInputPassword1" value="{{ $tarif->golongan_tarif }}">
                        </div>
                        
                          <div class="form-group">
                          <label for="exampleInputPassword1">Tarif perkWh</label>
                          <input type="text" class="form-control" name="tarif_perkwh" id="exampleInputPassword1" value="{{ $tarif->tarif_perkwh }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>

@endsection