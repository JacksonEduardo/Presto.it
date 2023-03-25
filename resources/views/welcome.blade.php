<x-layout>
{{-- ERRORE ACCESSO UTENTE --}}
    @if (session('nope'))
    <div class="alert alert-danger marginAlert">
        {{ session('nope') }}
    </div>
    @endif

    {{-- MIDDLEWARE REVISORE --}}
    @if (session('accessDenied'))
    <div class="alert alert-danger marginAlert">
        {{ session('accessDenied') }}
    </div>
    @endif

    {{-- ALERT PER DIVENTARE REVISORE --}}
    @if (session('messageBecome'))
    <div class="alert alert-warning marginAlert">
        {{ session('messageBecome') }}
    </div>
    @endif
        {{-- ALERT DOPO AVER RESO REVISORE --}}

    @if (session('messageMake'))
    <div class="alert alert-success marginAlert">
        {{ session('messageMake') }}
    </div>
    @endif
    
    
    {{-- INIZIO CAROSELLO --}}
    
    <div class="container-fluid">
        <div class="row ">
            <div class="swiper mySwiper3 p-0 vh-100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vh-100">
                        <div class="parallax-bg1"></div>
                        <div class="slideCustom d-flex flex-column align-items-md-start justify-content-center">
                            <p>Nuovi arrivi</p>
                            <h1>Scopri nuovi arrivi</h1>
                            <button class="btn btn-dark">Prova</button>
                        </div>
                    </div>
                    <div class="swiper-slide vh-100">
                        <div class="parallax-bg2"></div>
                        <div class="slideCustom d-flex flex-column align-items-md-start justify-content-center">
                            <p>SAldi a tutto spiano</p>
                            <h1>Scfdfdsfdsfdsfi</h1>
                            <button class="btn btn-dark">Prova</button>
                        </div>
                    </div>
                    <div class="swiper-slide vh-100">
                        <div class="parallax-bg3"></div>
                        <div class="slideCustom d-flex flex-column align-items-md-start justify-content-center">
                            <p>Nuovi arrivi</p>
                            <h1>Scopri nuovi arrivi</h1>
                            <button class="btn btn-dark">Prova</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        
    </div>
    
    {{-- FINE CAROSELLO --}}

    <div class="container py-5 my-3">
        <div class="row shadow text-center ">
            <h1 class="py-3">GLI ULTIMI ANNUNCI</h1>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row justify-content-center ">
            
            @forelse ($products as $product)
            
            <div class="col-12 col-md-4 px-0">
                {{-- <x-cardProduct :Product="$product" /> --}}
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
                            <span class="">by <a href="{{--route('user.index'), compact('user')--}}" class="card__author" title="author">{{$product->user->name}}</a></span>
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
    </div>
    
</x-layout>
