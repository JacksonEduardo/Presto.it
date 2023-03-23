<x-layoutWelcome>

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
    
    <div class="container-fluid ">
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
                            <p>Nuovi arrivi</p>
                            <h1>Scopri nuovi arrivi</h1>
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
                <x-cardProduct :Product="$product" />
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
    
</x-layoutWelcome>
