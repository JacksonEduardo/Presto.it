<nav class="navbar bg-transparent fixed-top NavbarCustom" id="nav">
  <div class="container-fluid">
    <div>
      <a class="navbar-brand" href="{{route('homepage')}}">
        <img src="/media/presto.png" width="150px" alt="Logo">
      </a>
      <a class="navbar-brand navResponsive categorie lead ms-4" href="{{route('product.index')}}">Annunci</a>
      <a class="navbar-brand navResponsive dropdown-toggle categorie lead ms-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Categorie
      </a>
      <ul class="dropdown-menu">
        @foreach ($categories as $category)
        <li><a class="dropdown-item" href="{{route('category.show', compact('category'))}}">{{$category->type}}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="d-flex">
      <form class="d-flex ms-2" role="search" action="{{route('products.search')}}" method="GET">
        <input class="form-control me-2 RadiusCustom" type="search" placeholder="Cerca" aria-label="Search" name="searched">
        <button class="btn categorie RadiusCustom border-0" type="submit">
          <i class="bi bi-search fs-3"></i>
        </button>
      </form>
      <button class="navbar-toggler border-0 ms-3 categorie" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list fs-3"></i>  
      </button>
    </div>
  </div>
</nav>

{{-- SIDERBAR --}}
<div class="offcanvas offcanvas-end RadiusCustom" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  @auth
  <div class="offcanvas-header d-flex position-relative mb-3">
    <div class="mx-auto">
      <a href="{{route('user.index')}}">
        <img class="img-fluid rounded-pill" src="{{Storage::url(Auth::user()->profilePicture)}}" width="100" alt="">   
      </a>
      <a class="text-decoration-none" href="{{route('user.index')}}">
      <h5 class="lead pt-2 fw-bold text-center">{{Auth::user()->name}}</h5>
      </a>
    </div>
    <button type="button" class="btn-close btnSideBarCustom" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div>
    <div class="offcanvas-body  categorie">
      <a class="navbar-brand lead fs-5 d-flex" href="{{route('product.create')}}"><i class="bi bi-plus-circle fs-3"></i>
        <h5 class="my-auto ms-3">Inserisci Annuncio</h5>
      </a>
    </div>
    <div class="offcanvas-body  categorie">
      <a class="navbar-brand lead fs-5 d-flex" href="{{route('user.index')}}"><i class="bi bi-person fs-3"></i></i>
        <h5 class="my-auto ms-3">Profilo</h5>
      </a>
    </div>
    
    <div class="offcanvas-body  categorie">
      @if (Auth::user()->is_revisor)
      <a href="{{route('revisor.index')}}" class="navbar-brand lead fs-5 position-relative d-flex" aria-current="page">
        <i class="bi bi-bell fs-3"></i>
        <h5 class="ms-3 my-auto">Zona Revisore</h5>
        <span class="translate-middle badge rounded-pill bg-danger notificationCustom">
          {{App\Models\Product::toBeRevisionedCount()}}
          <span class="visually-hidden">Messaggi non letti</span>
        </span>
      </a>  
      @else
      <a class="navbar-brand lead fs-5 d-flex" href="{{route('become.revisor')}}"><i class="bi bi-gear fs-3"></i>
        <h5 class="my-auto ms-3">Diventa Revisore</h5>
      </a>
      @endif
    </div>
    @if (Auth::user()->is_admin)
    <div class="offcanvas-body  categorie">
      <a href="{{route('admin.index')}}" class="navbar-brand lead fs-5 position-relative d-flex" aria-current="page">
        <i class="bi bi-gear fs-3"></i>
        <h5 class="ms-3 my-auto">Zona ADMIN</h5>
      </a> 
    </div>
      @else 
    @endif
    <div class="offcanvas-body  categorie">
      <a class="navbar-brand lead fs-5 d-flex" href="#"><i class="bi bi-envelope fs-3"></i>
        <h5 class="my-auto ms-3">Contattaci</h5>
      </a>
    </div>
    <div class="offcanvas-body  categorie">
      <a class="navbar-brand lead fs-5 d-flex" href="#"><i class="bi bi-question-lg fs-3"></i>
        <h5 class="my-auto ms-3">Chi Siamo</h5>
      </a>
    </div>
    <div class="offcanvas-body  categorie">
      <a class="navbar-brand lead fs-5 d-flex" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
        <i class="bi bi-box-arrow-left fs-3"></i>
        <h5 class="my-auto ms-3">Esci</h5>
      </a>
      <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
    </a>
  </div>
</div>

@else

<div class="offcanvas-header d-flex position-relative mb-3">
  <div class="mx-auto">
    <a href="{{route('login')}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      <img class="img-fluid rounded-pill" src="https://picsum.photos/200" width="100" alt="">
    </a>
    <h5 class="lead pt-2 fw-bold text-center">Guest</h5>
  </div>
  <button type="button" class="btn-close btnSideBarCustom" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div>
  <div class="offcanvas-body mb-3 categorie">
    <a class="navbar-brand lead fs-5 d-flex" href="{{route('login')}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-person fs-3"></i>
      <h5 class="my-auto ms-3">Login</h5>
    </a>
  </div>
  <div class="offcanvas-body mb-3 categorie">
    <a class="navbar-brand lead fs-5 d-flex" href="{{route('register')}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><i class="bi bi-box-arrow-in-right fs-3"></i>
      <h5 class="my-auto ms-3">Registrati</h5>
    </a>
  </div>
  <div class="offcanvas-body mb-3 categorie">
    <a class="navbar-brand lead fs-5 d-flex" href="#"><i class="bi bi-envelope fs-3"></i>
      <h5 class="my-auto ms-3">Contattaci</h5>
    </a>
  </div>
  <div class="offcanvas-body mb-3 categorie">
    <a class="navbar-brand lead fs-5 d-flex" href="#"><i class="bi bi-question-lg fs-3"></i>
      <h5 class="my-auto ms-3">Chi Siamo</h5>
    </a>
  </div>
</div>
@endauth
</div>






