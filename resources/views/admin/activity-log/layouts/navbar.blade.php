<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background-color: #406BE5;">
  <div class="container-fluid">
    <img src="{{asset('img/logo.png')}}" alt="" width="90">
    <a class="navbar-brand text-white" href="dashboard"><b>E-Electricity</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="/pelanggan">Pelanggan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/tarif">Tarif</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/penggunaan">Pengunaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/tagihan">Tagihan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/riwayat-pembayaran">Riwayat Pembayaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Laporan</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto px-3">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{-- {{ Auth::user()->nama_user }}    --}}
              <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end navbar -->