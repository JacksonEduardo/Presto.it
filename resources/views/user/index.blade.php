<x-layout>
    {{-- SE SONO AUTENTICATO: --}}
    @if(Auth::user())
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

        @if(Auth::user()->id == $user->id)
        <div class="container">
            <div class="row">
                <h2>inserisci avatar</h2>
                {{-- CARO DIMI DEL FUTURO VEDI MEGLIO COME FARE L'ANTEPRIMA IMMAGINE --}}
                {{-- @if (Auth::user()->$profilePicture)
                <div class="mt-3 text-center">
                    Anteprima Immagine
                    <img width="200px" src="{{ $profilePicture->temporaryUrl() }}">
                </div> --}}
                {{-- @endif --}}
                <form action="{{route('user.avatar',['user' => Auth::user()] )}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="file" name="profilePicture" class="form-control">
                    <button type="submit" class="btn btn-primary">Inserisci Avatar</button>
                </form>
            </div>
        </div>
        @else
        {{-- ELSE NON VISUALIZZARE NIENTE --}}
        @endif
        {{-- SE SONO ADMIN E L'UTENTE è REVISORE LO LICENZIO --}}
        @if (Auth::user()->is_admin && $user->is_revisor == 1)
        <a class="lead fs-5 d-flex" href="{{route('delete.revisor', compact('user'))}}">
            <h5 class="my-auto ms-3">Licenzia Revisore</h5>
        </a>
        @endif

    @else {{-- SE NON SONO AUTENTICATO: --}} 
        
        <x-header>
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
    
</x-layout>