  @extends('admin.layouts.app')
  
  @section('title','Pelanggan | E-Electricity')
  
  @section('content')
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            {{-- @if(session('sukses'))
              <div class="alert alert-success" role="alert">
                {{session('sukses')}}
              </div>
            @endif --}}
            <h3><span>Pelanggan</span></h3>
            <div class="card card-body">
              <div class="mb-3">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
              </div>
              <div class="table-responsive">
                <table class="table table-bordered mt-5 text-center" id="dataTables" width="100%">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">No meter</th>
                        <th scope="col">Daya</th>
                        <th scope="col">Nama pelanggan</th>
                        <th scope="col">alamat</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data_pelanggan as $pelanggan)
                      <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $pelanggan->no_meter }}</td>
                        <td>{{ $pelanggan->tarif->daya }}</td>
                        <td>{{ $pelanggan->nama_pelanggan }}</td>
                        <td>{{ $pelanggan->alamat }}</td>
                        <td>
                          <a href="#" class="btn btn-primary btn-md">
                            <i class="fas fa-eye text-white"></i>
                          </a>
                          
                          <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning btn-md">
                            <i class="fas fa-pen text-white"></i>
                          </a>
                          
                          <a href="{{ route('pelanggan.delete', $pelanggan->id) }}" class="btn btn-danger btn-md">
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
              
        <form action="{{ route('pelanggan.store') }}" method="post">
          @csrf
          <div class="modal-body">
              <div class="form-group">
                <label for="pelanggan_id" class="col-form-label">Daya</label>
                <select name="tarif_id" id="tarif_id" class="form-control">
                  @foreach ($tarif as $data)
                    <option value="{{$data->id}}">{{$data->id}} - {{$data->daya}}</option>
                  @endforeach
                </select>
              </div>
              
              <div class="form-group">
                <label for="no_meter" class="col-form-label">No Meter</label>
                <input type="number" class="form-control" id="no_meter" name="no_meter" placeholder="Enter Nomor Meter" required>
              </div>
              
              <div class="form-group">
                <label for="nama_pelanggan" class="col-form-label">Nama</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Enter Nama" required>
              </div>        
             
              <div class="form-group">
                <label for="alamat" class="col-form-label">Alamat</label>
                <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control"></textarea>
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