<header>
    <nav class="navbar navbar-expand-lg">
      <div class="container pb-4">
        <h3 class="logo" class="text-blue">Klini<span>Kita</span></h3>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon bg-aqua text-red">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>
          </span>
          
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('webprofil.dokter')}}">Temukan dokter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('webprofil.fasilitas')}}">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('webprofil.kontak')}}">kontak</a>
            </li>
          </ul>
          <ul class="navbar-nav pull-sm-right d-flex align-items-center bg-black">
            <li class="nav-item">
              <a class="nav-link" href=""><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=""><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=""><i class="fab fa-youtube"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=""><i class="fas fa-envelope"></i></a>
            </li>
            <div class="button">
              <a href="/login" class="btn main-button ml-3">Masuk</a>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>