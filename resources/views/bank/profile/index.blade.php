@extends('bank.layouts.app')

@section('title','Profile Bank | E-Electricity')

@section('content')

<div class="container">
<div class="card">
  <h5 class="card-header bg-dark text-white">Profile Bank</h5>
  <div class="card-body">
  <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="img" style="width: 500px;">
        <img src="/upload/{{ $profile->logo_bank}}" class="img-thumbnail" alt="...">
        <div class="custom-file">
            <input type="file" name="gambar" class="custom-file-input" id="validatedCustomFile">
            <label class="custom-file-label" for="validatedCustomFile" > Choose File ...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
    </div>

    <fieldset>
    <div class="mb-3 mt-3">
        <label for="" class="form-label" placeholder="MANDIRI"><b>NAMA BANK</b></label>
        <input type="text" class="form-control" name="nama_metode" value="{{ $profile->nama_metode }}" readonly>
    </div>
    </fieldset>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>NOMOR REKENING</b></label>
        <input type="text" class="form-control" name="rekening" value="{{ $profile->rekening }}">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
</div>
</div>

@endsection