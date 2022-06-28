<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><h2>Suscrip</h2></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item d-flex align-items-center">
          <a class="a" aria-current="page" href="{{route('profile')}}">
          Perfil</a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a class="a" href="{{route('MiSubscrips')}}">Mi suscripcion</a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a class="a" href="#">mis pagos</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<style>
   .a{
    font-size: 18px;
    color: #F2EBE9;
    text-decoration: none;
    margin-left: 10px;
  }
  #navbar{
    background-color: #1B2430;
    
  } 
</style>