<x-layout>
    <x-header>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 mt-5">
                    <h1 class="prestoBackgroundAnimate RadiusCustom fw-bold display-4 text-white">Annunci</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <h3 class="py-4 display-5">Categorie</h3>
        </div>
        <section class="customer-logos slider">
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-pc-display display-4 d-block"></i>
                    <p class="lead textCategory">Informatica</p> 
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-joystick display-4 d-block"></i>
                    <p class="lead textCategory">Console e Videogiochi</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-camera display-4 d-block"></i>
                    <p class="lead textCategory">Fotografia</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-phone display-4 d-block"></i>
                    <p class="lead textCategory">Telefonia</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-tv display-4 d-block"></i>
                    <p class="lead textCategory">Informatica</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-music-note-beamed display-4 d-block"></i>
                    <p class="lead textCategory">Musica</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-tree display-4 d-block"></i>
                    <p class="lead textCategory">Giardino e fai da te</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-droplet display-4 d-block"></i>
                    <p class="lead textCategory">Elettrodomestici</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-bicycle display-4 d-block"></i>
                    <p class="lead textCategory">Sports</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-car-front display-4 d-block"></i>
                    <p class="lead textCategory">Motori</p>
                </a>
            </div>
        </section>
    </x-header>
    
    <div class="container-fluid">
        <div class="row">
            @forelse ($products->where('is_accepted', true) as $product)
            <div class="col-12 col-md-3 p-4">
                <x-cardProduct :Product="$product" />
            </div>
            
            @empty
            <h1 class="py-5">Non ci sono  prodotti per la ricerca effettuata!</h1>
            @endforelse
            <div class="d-flex justify-content-center">
                {{$products->links()}}
            </div>
        </div>
    </div>
</x-layout>