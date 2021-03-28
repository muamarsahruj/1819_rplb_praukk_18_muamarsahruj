  @extends('admin.layouts.app')
  
  @section('title','Tarif | E-Electricity')
  
  @section('content')
  <div class="container">
    {{-- @if(session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
    @endif --}}
    <div class="row">
      <div class="col-lg-12">
        <h3><span>Tarif</span></h3>
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
                    <td scope="row">Rp. {{ number_format($tarif->tarif_perkwh) }}</td>
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