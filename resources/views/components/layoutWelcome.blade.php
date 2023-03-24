<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    {{-- link al carosello --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    {{-- link livewire --}}
    @livewireStyles
    {{-- link ai font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,300&family=Source+Sans+Pro:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


{{-- INIZIO NAV SPECIAL --}}
<nav class="navbar navbar-expand-lg p-2 shadow-sm bg-transparent fixed-top" id="navUno">
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
          <li class="nav-item">
            <a class="nav-link active fw-bold p-2 mx-3 home" aria-current="page" href="{{route('product.index')}}">Annunci</a>
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
              </li>
            </ul>
            @auth
            <li class="nav-item">
              <a class="nav-link tx-m fw-bold" href="{{route('product.create')}}">Inserisci Annuncio </a>
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
          </div>
        </ul>
        <div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-md-2 ">
            <li>
              <form class="formSearcher" action="{{route('products.search')}}" method="GET">
                <input name="searched" class="inputSearcher form-control me-2 inputCustom" type="search" placeholder="chat gbt" aria-label="search">
                <button type="submit" class="fa fa-search border-0"></button>
            </form>
            </li>
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
        {{-- <form action="{{route('products.search')}}" method="GET" class="d-flex">
          <input name="searched" class="form-control me-2" type="search" placeholder="search" aria-label="search">
          <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  
  
  
  
  
  
  </nav> 
    
    <div class="min-vh-100">
        {{$slot}}    
    </div>
    
    <x-footer /> 
    
    {{-- MODALE PER LOGIN  --}}
    
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('login')}}">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Indirizzo email</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" checked>
                            <label class="form-check-label" for="remember">Ricordami</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="" class="btn btn-dark ">Accedi</button>
                        </div>
                        
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                </div> --}}
            </div>
        </div>
    </div>
    
    
    {{-- MODALE REGISTER  --}}
    
    
    
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrati</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('register')}}">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Inserisci email</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome utente</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Inserisci password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Conferma password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('product.create')}}">
                            <button type="submit" class="btn btn-dark">Registrati</button>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
             {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
            </div> --}}
        </form>
       
    </div>
    
</div>
</div>
</div>




@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
</html>