@include('layout.partials.login')
@include('layout.partials.register')


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">

  <!-- navbar brand -->
    <a class="navbar-brand" href="#">
        <div class="brand-container">
            <img src="{{ url('img/logo.png') }}" class="brand" alt="Al-ittihad">
        </div>
        <div class="brand-caption">
            <p class="title">Pondok Pesantren Al-Ittihad</p>
            <p class="caption">Karang Tengah Cianjur</p>
        </div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/list">List Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lowongan">Lowongan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artikel</a>
        </li>
      </ul>
     
    </div>
    <button class="btn bg-primary text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fa-solid fa-arrow-right-to-bracket"> Login</i></button>
  </div>
</nav>
<div class="w-100 bg-secondary py-2">
    <marquee behavior="" direction=""> Hello word !</marquee>
  </div>