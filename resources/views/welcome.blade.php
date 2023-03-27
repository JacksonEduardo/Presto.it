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
    
    @if (session('messageDelete'))
    <div class="alert alert-success marginAlert">
        {{ session('messageDelete') }}
    </div>
    @endif
    
    
    {{-- INIZIO CAROSELLO --}}
    
    <div class="container-fluid">
        <div class="row ">
            <div class="swiper mySwiper3 p-0 vh-100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vh-100">
                        <div class="parallax-bg1"></div>
                        <div class="slideCustom d-flex flex-column align-items-md-start justify-content-center marginWelcome">
                            <p class="fs-4">Non lo usi più?</p>
                            <h1>Inserisci qui il tuo annuncio</h1>
                            <div class="align-items-center">
                                <a href="{{route('product.create')}}"><button class="btnIntro">Vai!</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vh-100">
                        <div class="parallax-bg2"></div>
                        <div class="slideCustom d-flex flex-column align-items-md-start justify-content-center marginWelcome">
                            <p class="fs-4">Cerchi un articolo nuovo?</p>
                            <h1>Trovalo tra i nostri annunci certificati</h1>
                            <div class="align-items-center">
                                <a href="{{route('product.index')}}"><button class="btnIntro">Trova</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide vh-100">
                        <div class="parallax-bg3"></div>
                        <div class="slideCustom d-flex flex-column align-items-md-start justify-content-center marginWelcome">
                            <p class="fs-4">Ti serve un articolo usato?</p>
                            <h1>Scopri tra le nostre 10  categorie</h1>
                            <div class="align-items-center">
                                <a href="{{route('product.index')}}"><button class="btnIntro">Cerca</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    {{-- FINE CAROSELLO --}}
    
    <div class="container d-flex justify-content-center">
        <h3 class="my-5 display-5">Ultimi Annunci</h3>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <section class="customer-logos2 slider">
                @foreach ($products as $product)
                <div class="slide fs-5">
                    <x-cardProduct :Product="$product" />
                </div>
                @endforeach
            </section>          
        </div>
        
        <div class="row">
            <div class="d-flex justify-content-center my-5">
                <div class="btn btnIntro">Annunci</div>
            </div>
        </div>   
        
    </div>
    
    <div class="flex-container mt-5">
        <div class="flex-slide home">
            <div class="flex-title lead">Informatica</div>
            <div class="btn btnIntro"><i class="bi bi-arrow-right fs-5"></i></div>
        </div>
        <div class="flex-slide about">
            <div class="flex-title lead">Console e Videogiochi</div>
            <div class="btn btnIntro"><i class="bi bi-arrow-right fs-5"></i></div>
        </div>
        <div class="flex-slide work">
            <div class="flex-title lead">Fotografia</div>
            <div class="btn btnIntro"><i class="bi bi-arrow-right fs-5"></i></div>
        </div>
        <div class="flex-slide bamba">
            <div class="flex-title lead">Sports</div>
            <div class="btn btnIntro mt-auto"><i class="bi bi-arrow-right fs-5"></i></div>
        </div>
    </div>
    
    <div class="vh-25 pb-5 position-relative">
        <video class="videoCustom" autoplay muted loop>
            <source src="{{('/media/giradischi.mp4') }}" type="video/mp4">
            </video>
        <h4 class="titleVideo display-1">Musica e Film</h4>
        <p class="pVideo lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa dicta. Ducimus rerum quaerat, adipisci laborum tempore qui placeat delectus iste, animi eveniet dolor vero quo commodi odio earum cumque.</p>
        <div class="btnVideo btn btnIntro"><i class="bi bi-arrow-right fs-5"></i></div>
    </div>
        
    </x-layout>
