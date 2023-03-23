{{-- FIXED TOP DA RIVEDERE --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary p-2 shadow-sm bg-transparent " id="nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}"><img src="/media/logoPresto-transp.png" width="90px" alt="LOGO"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active fw-bold p-2 mx-3 home" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav categorie ">
            <li class="nav-item dropdown ">
              <ul class="dropdown-toggle fw-bold p-2 mx-3 " data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </ul>
              <ul class="dropdown-menu dropdown-menu-transparent">
                @foreach ($categories as $category)
                
                <li><a class="dropdown-item" href="{{route('category.show', compact('category'))}}">{{$category->type}}</a></li>
                
                @endforeach
              </ul>
              @auth
              {{-- LO VOGLIAMO DAVVRERO QUA? --}}
              <li class="nav-item">
                <a class="nav-link tx-m fw-bold" href="{{route('product.create')}}">Inserisci Annuncio </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link tx-m fw-bold" href="{{route('become.revisor')}}">Lavora con noi</a>
              </li>

              
              @if (Auth::user()->is_revisor)
              <li class="nav-item">
                <a href="{{route('revisor.index')}}" class="nav-link btn btn-outline-success btn-sm position-relative" aria-current="page">
                  Zona revisore
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{App\Models\Product::toBeRevisionedCount()}}
                    <span class="visually-hidden">Messaggi non letti</span>
                  </span>
                </a>
              </li>
              @endif
              @endauth
            </li>
          </ul>
        </div>
      </ul>
      <i class="bi bi-search fs-5 fw-bold my-md-auto px-md-2"></i>
      <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-md-2 ">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle personToggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              <i class="bi bi-person fs-4 fw-bold">  </i> {{Auth::user()->name}}  
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
              <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle personToggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              {{-- Benvenuto Guest! --}}<i class="bi bi-person fs-4 fw-bold"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" href="{{route('register')}}">Registrati</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="{{route('login')}}">Accedi</a></li>
            </ul>
          </li>
          @endauth
        </ul>
        
      </div>
      
      {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
    </div>
  </div>
  
  
  
  
  
  
</nav>