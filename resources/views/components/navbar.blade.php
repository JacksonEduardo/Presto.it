<nav class="navbar bg-light fixed-top NavbarCustom">
  <div class="container-fluid">
    <div class="d-flex mx-auto mx-md-0 ps-4">
      <a class="navbar-brand" href="{{route('homepage')}}">
        <img src="/media/presto.png" width="150px" alt="Logo">
      </a>
      <a class="navbar-brand navResponsive categorie lead ms-4" href="{{route('product.index')}}">Annunci</a>
      <a class="navbar-brand navResponsive dropdown-toggle-no-caret categorie lead ms-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Categorie
      </a>
      <div class="container d-flex justify-content-center p-0">
        <ul id="dropdownShow" class="dropdown-menu submenu m-0 border-0 bg-light">
          @foreach ($categories as $category)
          <li class="dropItem"><a class="dropdown-item bg-transparent tx-m m-0 lead" href="{{route('category.show', compact('category'))}}">{{$category->type}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="d-flex">
      <form class="d-flex ms-3" role="search" action="{{route('products.search')}}" method="GET">
        <input class="form-control me-2 RadiusCustom" type="search" placeholder="Cerca" aria-label="Search" name="searched">
        <button class="btn categorie RadiusCustom border-0" type="submit">
          <i class="bi bi-search fs-3"></i>
        </button>
      </form>
      <div class="dropdown-start ms-3">
        <button class="btn btn-transparent dropdown-toggle-no-caret border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-globe-europe-africa fs-3"></i>
        </button>
        <ul class="dropdown-menu bg-light border-0 m-0">
          <li class="dropLanguage">
            <span class="d-flex categorie">
              <x-_locale lang='it'/>
              <p class="mt-1 lead">Italiano</p>
            </span>
            <span class="d-flex categorie">
              <x-_locale lang='en'/>
              <p class="mt-1 lead">English</p>
            </span>
            <span class="d-flex categorie">
              <x-_locale lang='es'/>
              <p class="mt-1 lead">Español</p>
            </span>
          </li>
        </ul>
      </div>
      
      <button class="navbar-toggler border-0 ms-2 categorie" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list fs-3"></i>  
      </button>
    </div>
  </div>
</nav>

{{-- SIDERBAR --}}
<div class="offcanvas offcanvas-end RadiusCustom" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  @auth
  <div class="offcanvas-header d-flex position-relative">
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
    <div class="offcanvas-body categorie py-3">
      <a class="navbar-brand lead fs-5 d-flex" href="{{route('product.create')}}"><i class="bi bi-plus-circle fs-3"></i>
        <h5 class="my-auto ms-3">Inserisci Annuncio</h5>
      </a>
    </div>
    <div class="offcanvas-body categorie py-3">
      <a class="navbar-brand lead fs-5 d-flex" href="{{route('product.index')}}"><i class="bi bi-collection fs-3"></i>
        <h5 class="my-auto ms-3">Annunci</h5>
      </a>
    </div>
    <div class="offcanvas-body categorie py-3">
      <a class="navbar-brand lead fs-5 d-flex" href="{{route('user.index')}}"><i class="bi bi-person fs-3"></i></i>
        <h5 class="my-auto ms-3">Profilo</h5>
      </a>
    </div>
    
    <div class="offcanvas-body categorie py-3">
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
      <a class="navbar-brand lead fs-5 d-flex" href="{{route('user.diventaRevisore')}}"><i class="bi bi-gear fs-3"></i>
        <h5 class="my-auto ms-3">Lavora con noi</h5>
      </a>
      @endif
    </div>
    @if (Auth::user()->is_admin)
    <div class="offcanvas-body  categorie py-3">
      <a href="{{route('admin.index')}}" class="navbar-brand lead fs-5 position-relative d-flex" aria-current="page">
        <i class="bi bi-gear fs-3"></i>
        <h5 class="ms-3 my-auto">Zona ADMIN</h5>
      </a> 
    </div>
      @else 
    @endif
    <div class="offcanvas-body categorie py-3">
      <a class="navbar-brand lead fs-5 d-flex" href="#"><i class="bi bi-envelope fs-3"></i>
        <h5 class="my-auto ms-3">Contattaci</h5>
      </a>
    </div>
    <div class="offcanvas-body categorie py-3">
      <a class="navbar-brand lead fs-5 d-flex" href="#"><i class="bi bi-question-lg fs-3"></i>
        <h5 class="my-auto ms-3">Chi Siamo</h5>
      </a>
    </div>
    <div class="offcanvas-body categorie py-3">
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
  <div class="offcanvas-body categorie">
    <a class="navbar-brand lead fs-5 d-flex" href="{{route('login')}}"><i class="bi bi-person fs-3"></i>
      <h5 class="my-auto ms-3">Login</h5>
    </a>
  </div>
  <div class="offcanvas-body categorie">
    <a class="navbar-brand lead fs-5 d-flex" href="{{route('register')}}"><i class="bi bi-box-arrow-in-right fs-3"></i>
      <h5 class="my-auto ms-3">Registrati</h5>
    </a>
  </div>
  <div class="offcanvas-body categorie">
    <a class="navbar-brand lead fs-5 d-flex" href="{{route('product.index')}}"><i class="bi bi-collection fs-3"></i>
      <h5 class="my-auto ms-3">Annunci</h5>
    </a>
  </div>
  <div class="offcanvas-body categorie">
    <a class="navbar-brand lead fs-5 d-flex" href="#"><i class="bi bi-envelope fs-3"></i>
      <h5 class="my-auto ms-3">Contattaci</h5>
    </a>
  </div>
  <div class="offcanvas-body categorie">
    <a class="navbar-brand lead fs-5 d-flex" href="#"><i class="bi bi-question-lg fs-3"></i>
      <h5 class="my-auto ms-3">Chi Siamo</h5>
    </a>
  </div>
</div>
@endauth
</div>






