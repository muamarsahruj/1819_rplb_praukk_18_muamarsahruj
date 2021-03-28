  @extends('admin.activity-log.layouts.app')
  
  @section('title','Activity Log | E-Electricity')
  
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
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
              </div>
              <div class="table-responsive">
                <table class="table table-bordered mt-5" id="dataTables" width="100%">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama log</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tabel</th>
                        <th scope="col">Refensi</th>
                        <th scope="col">User</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($log as $data)
                      <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_log }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->tabel }}</td>
                        <td>{{ $data->referensi_id }}</td>
                        <td>{{ $data->user_id }}</td>
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