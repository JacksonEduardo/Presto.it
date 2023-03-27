{{-- <x-layout>
    {{-- SE SONO AUTENTICATO: --}}
    {{--  @if (Auth::user())
        <x-header>
            <h1 class="p-5 bg-light text-dark mt-5">
                Ciao {{Auth::user()->name}}, benvenuto sul profilo di {{$user->name}}
            </h1>
        </x-header>
        
        @if (session('avatarUpdated'))
        <div class="alert alert-success marginAlert">
            {{ session('avatarUpdated') }}
        </div>
        @endif
        
        @if (Auth::user()->id == $user->id)
        <div class="container">
            <div class="row">
                <h2>inserisci avatar</h2> --}}
                {{-- CARO DIMI DEL FUTURO VEDI MEGLIO COME FARE L'ANTEPRIMA IMMAGINE --}}
                {{-- @if (Auth::user()->$profilePicture)
                    <div class="mt-3 text-center">
                        Anteprima Immagine
                        <img width="200px" src="{{ $profilePicture->temporaryUrl() }}">
                    </div> --}}
                    {{-- @endif --}}
                    {{-- <form action="{{route('user.avatar',['user' => Auth::user()] )}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="file" name="profilePicture" class="form-control">
                        <button type="submit" class="btn btn-primary">Inserisci Avatar</button>
                    </form>
                </div>
            </div>
            @else --}}
            {{-- ELSE NON VISUALIZZARE NIENTE --}}
            {{-- @endif --}}
            {{-- SE SONO ADMIN E L'UTENTE è REVISORE LO LICENZIO --}}
            {{--  @if (Auth::user()->is_admin && $user->is_revisor == 1)
                <a class="lead fs-5 d-flex" href="{{route('delete.revisor', compact('user'))}}">
                    <h5 class="my-auto ms-3">Licenzia Revisore</h5>
                </a>
                @endif
                
                @else --}} {{-- SE NON SONO AUTENTICATO: --}}
                
                {{-- <x-header>
                    <h1 class="p-5 bg-light text-dark mt-5">
                        Ciao Guest, benvenuto sul profilo di {{$user->name}}
                    </h1>
                </x-header>
                
                @endif
                
                <div class="container">
                    <div class="row">
                        @forelse ($products as $product)
                        <div class="col-12 col-lg-6">
                            <div class="px-3 px-md-5 pb-3 pb-md-5 mx-3 mx-md-5 mb-3 mb-md-5 ">
                                <article class="card card--1 m-0">
                                    <div class="card__info-hover">
                                        <i class="bi bi-bag-plus fs-5"></i>
                                        <i class="bi bi-heart fs-5 ms-3"></i>
                                        <div class="card__clock-info">
                                            <i class="bi bi-stopwatch fs-5"></i>
                                            <small>{{$product->created_at->format('d/m/Y')}}</small>
                                        </div> 
                                    </div>
                                    
                                    <div class="card__img" style="background-image: url('https://picsum.photos/200')"></div>
                                    <a href="{{route('product.show', compact('product'))}}" class="card_link">
                                        <div class="card__img--hover" style="background-image: url('https://picsum.photos/200')"></div>
                                    </a>
                                    <div class="card__info">
                                        <span class="">{{$product->category->type}}</span>
                                        <h3 class="">{{$product->name}}</h3>
                                        <h2 class="">€{{$product->price}}</h2>
                                        <span class="">by <a href="{{route('user.index')}}" class="card__author" title="author">{{$product->user->name}}</a></span>
                                    </div>
                                </article>
                            </div>
                            
                        </div>
                        
                        @empty
                        
                        <div class="col-12">
                            <h1>Non sono ancora presenti annunci</h1>
                            
                            <p> Inserisci il tuo primo annuncio! </p>
                            <a href="{{ route('product.create') }}" class="btn btn-dark">Inserisci Annuncio</a>
                            
                        </div>
                        @endforelse
                    </div>
                    
                </x-layout> --}}
                
            {{-- VERSIONE PAGINA PROFILO FATTA DA ROB, VEDERE INSIEME SE POTREBBE ANDAR BENE COME INIZIO --}}
            <x-layout>
                    
                @if (Auth::user())
                   
                        <div class="container-fluid text-center mt-5">
                            <div class="row justify-content-center">
                                <h1 class="bg-light text-dark mt-5 p-3">
                                Benvenuto sul profilo di {{ $user->name }}
                                </h1>
                            </div>
                        </div>
                        @else {{-- SE NON SONO AUTENTICATO: --}}
                
                         <x-header>
                            <h1 class="p-5 bg-light text-dark mt-5">
                                Ciao Guest, benvenuto sul profilo di {{$user->name}}
                            </h1>
                        </x-header>
                @endif
                    
                    @if (session('avatarUpdated'))
                    <div class="alert alert-success marginAlert">
                        {{ session('avatarUpdated') }}
                    </div>
                     @endif
                    
                    
                    
                    <div class="row d-flex justify-content-center align-items-center mb-5 m-0">
                        <div class="col-12 col-md-10">
                            <div class="card m-0">
                                <div class="rounded-top text-white d-flex flex-row topCardProfile">
                                    <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                        
                                        <img src="{{ Storage::url($user->profilePicture) }}" alt="Generic placeholder image"
                                        class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                                        
                                        {{-- <input type="file" name="avatar">
                                    </form> --}}
                                    </div>
                                
                                    <div class="ms-3" style="margin-top: 130px;">
                                        <h5>{{ $user->name }}</h5>
                                    
                                    </div>
                                </div>
                                @if (Auth::user()->id == $user->id)
                                <div class="container p-4 mt-3 text-black align-items-center" style="background-color: #f8f9fa;">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-6 py-2">
                                            <p class="lead fw-normal mt-2 mb-0">
                                                Inserisci la tua foto profilo
                                            </p>
                                            <form action="{{ route('user.avatar', ['user' => Auth::user()]) }}" method="POST"
                                            enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                            
                                                <input type="file" name="profilePicture" class="my-2 d-block">
                                                <button type="submit" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                                                style="z-index: 1;">
                                                Modifica Foto
                                                </button>
                                            </form>
                                    
                                        </div>
                                        {{-- <div class="col-12 col-md-6 d-flex justify-content-end text-center py-2">
                                                <div>
                                                    <h4>Danger Zone</h4>
                                                        <form method="POST" action="#">
                                                           @csrf
                                                           @method('delete')
                                            
                                                           <button type="submit" class="btn btn-danger">Cancella Profilo</button>
                                            
                                                        </form>
                                                </div>
                                    
                                        </div> --}}
                                    </div>
                                </div>
                                @else
                                
                                @endif
                                <div class="card-body p-4 text-black">
                                    <div class="mb-5">
                                        <p class="lead fw-normal mt-2 mb-0">
                                        Informazioni
                                        </p>
                                        <div class="container py-3 bg-dark tx-m bg-a rounded">
                                            <div class="row p-0 w-100 mx-0">
                                                <div class="col-6 col-md-3 p-0 h-50 my-auto mx-auto">
                                                    <p class="lead fw-normal text-center tx-s">Ruolo</p>
                                                    <p class="font-italic mb-1 text-center border-bottom mx-3 tx-s">Revisore</p>
                                                </div>
                                                <div class="col-6 col-md-3 p-0 h-50 my-auto mx-auto">
                                                    <p class="lead fw-normal text-center tx-s">Città</p>
                                                    <p class="mb-1 text-center border-bottom mx-3 tx-s">Latina</p>
                                                </div>
                                                <div class="col-6 col-md-3 p-0 h-50 mx-auto my-auto">
                                                    <p class="lead fw-normal text-center tx-s">Specialità</p>
                                                    <p class="mb-1 text-center border-bottom mx-3 tx-s">Chi lo sà</p>
                                                </div>
                                                <div class="col-6 col-md-3 p-0 h-50 mx-auto my-auto">
                                                    <p class="lead fw-normal text-center tx-s">Specialità</p>
                                                    <p class="mb-1 text-center border-bottom mx-3 tx-s">Bomba!</p>
                                                </div>
                                                {{-- <div class="justify-content-around mt-1 text-center">
                                                    <a href="{{route('argcourse.index')}}"><p class="mb-1 text-center tx-m btn border-bottom bg-primary ">Vedi Tutti</p></a>
                                                    
                                                    <button type="button" class="btn btn-success mb-1 text-center tx-m btn border-bottom bg-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Crea nuovo argomento
                                                    </button>
                                                </div> --}}
                                                
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center my-5 bg-a rounded">
                                            <p class="lead fw-normal my-3 tx-s px-3">I miei Annunci inseriti</p>
                                            <p class="mb-0"><a href="#" class="text-muted tx-s px-3">Show all</a></p>
                                        </div>
                                        <div class="row g-2 px-3 justify-content-center">
                                            
                                            
                                            @forelse ($products as $product)
                                            <div class="col-8 col-md-4 mb-2 bodyCardShadow">
                                                <article class="card card--1 m-0">
                                                    <div class="card__info-hover">
                                                        <i class="bi bi-bag-plus fs-5"></i>
                                                        <i class="bi bi-heart fs-5 ms-3"></i>
                                                        <div class="card__clock-info">
                                                            <i class="bi bi-stopwatch fs-5"></i>
                                                            <small>{{ $product->created_at->format('d/m/Y') }}</small>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="card__img" style="background-image: url('https://picsum.photos/200')"></div>
                                                    <a href="{{ route('product.show', compact('product')) }}" class="card_link">
                                                        <div class="card__img--hover"
                                                        style="background-image: url('https://picsum.photos/200')"></div>
                                                    </a>
                                                    <div class="card__info">
                                                        <span class="">{{ $product->category->type }}</span>
                                                        <h3 class="">{{ $product->name }}</h3>
                                                        <h2 class="">€{{ $product->price }}</h2>
                                                        <span class="">by <a href="{{ route('user.index') }}" class="card__author"
                                                            title="author">{{ $product->user->name }}</a></span>
                                                        </div>
                                                    </article>
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <a href="{{ route('product.show', compact('product')) }}"><button
                                                            class="btn btnPrenota2 text-white">Dettaglio</button></a>
                                                        </div>
                                                    </div>
                                                    
                                                    @empty
                                                    
                                                    <div class="col-12">
                                                        <h1>Non sono ancora presenti annunci</h1>
                                                        
                                                        <p> Inserisci il tuo primo annuncio! </p>
                                                        <a href="{{ route('product.create') }}" class="btn btn-dark">Inserisci Annuncio</a>
                                                        
                                                    </div>
                                                    @endforelse
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
            </x-layout>
            