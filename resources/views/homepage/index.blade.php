@extends('homepage.layouts.app')

@section('title','Homepage | E-Electirity')

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <img src="{{asset('img/logo.png')}}" alt="" width="70">
    <a class="navbar-brand" href="/">E-Electricity</a>
    <button class="navbar-toggler text-black" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
        <!-- <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">category</a> -->
        <!-- <a class="nav-link" href="#">Menu</a>  -->
        <a class="nav-link" href="/register">Registrasi</a>
        <a class="btn btn-primary tombol" href="/login" tabindex="-1" aria-disabled="true">Login</a>
      </div>
    </div>
  </div>
</nav>
<!-- End navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Welcome to the electricity<span><br>payment</span> website <span></h1>
        <!-- <a href="" class="btn btn-primary tombol">We Are</a> -->
      </div>
    </div>
    <!-- end Jumbotron -->

    <!-- container -->
    <div class="container">

    {{-- working space --}}
    <div class="row workingspace">
        <div class="col-lg-6">
          <div data-aos="fade-up"
          data-aos-duration="3000">
          <img src="img/bg3.jpg" alt="Workingspace" class="img-fluid">
     </div>
        </div>
        <div class="col-lg-5">
          <div data-aos="fade-up"
          data-aos-duration="3000">
          <h3>Perusahaan <span>Listrik</span> Negera</h3>
          <p>PT PLN (Persero) adalah sebuah BUMN yang mengurusi semua aspek kelistrikan yang ada di Indonesia.</p>
        </div>
        </div>
    </div>
    {{-- end working space --}}

    {{-- working space --}}
    <div class="row workingspace">
        <div class="col-lg-6">
          <div data-aos="fade-up"
          data-aos-duration="3000">
          <h3><span>Listrik</span></h3>
          <p>listrik adalah rangkaian fenomena fisika yang berhubungan dengan kehadiran dan aliran muatan listrik. Listrik menimbulkan berbagai macam efek yang telah umum diketahui, seperti petir, listrik statis, induksi elektromagnetik dan arus listrik.</p>
     </div>
        </div>
        <div class="col-lg-5">
          <div data-aos="fade-up"
          data-aos-duration="3000">
          <img src="img/bg.jpg" alt="Workingspace" class="img-fluid">
     </div>
        </div>
    </div>
    {{-- end working space --}}

    </div>
    <!-- end container -->

@endsection
