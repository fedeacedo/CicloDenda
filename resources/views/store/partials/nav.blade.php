<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{-- Logo sitio --}}
      {{-- <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">
              <img alt="Brand" src="http://i890.photobucket.com/albums/ac102/fdkar/Avatares/ZHM.gif" alt="" class="avatar"">
            </a>
          </div>
        </div>
      </nav> --}}

      <a class="navbar-brand main-title" href="{{ route('home') }}">Ciclo Denda</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text">Todo para tú bici</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{-- {{ route('cart-show') }} --}}"><i class="fa fa-shopping-cart"></i></a></li>
        <li><a href="#">Conocenos</a></li>
        <li><a href="#">Contacto</a></li>
        {{-- @include('store.partials.menu-user') --}}
        

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role='menu'>
            <li><a href="#">Iniciar sesión</a></li>
            {{-- <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> --}}
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>