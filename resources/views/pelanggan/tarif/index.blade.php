  @extends('pelanggan.layouts.app')
  
  @section('title','Dashboard | E-Electricity')
  
  @section('content')
  <div class="container">
    @if(session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
    @endif
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-body">
          <div class="mb-3">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered mt-5 text-center" id="dataTables" width="100%">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Daya</th>
                    <th scope="col">Tarif perkWh</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_tarif as $tarif)
                  <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td scope="row">{{ $tarif->daya }}</td>
                    <td scope="row">{{ $tarif->tarif_perkwh }}</td>
                    <td>
                      <a href="#" class="btn btn-primary btn-md">
                        <i class="fas fa-eye text-white"></i>
                      </a>
                          
                      <a href="{{ route('tarif.edit', $tarif->id) }}" class="btn btn-warning btn-md">
                        <i class="fas fa-pen text-white"></i>
                      </a>
                          
                      <a href="{{ route('tarif.delete', $tarif->id) }}" class="btn btn-danger btn-md">
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

  @endsection