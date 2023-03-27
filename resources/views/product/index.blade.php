<x-layout>
    <x-header>
        <h1 class="mt-5 tx-a fw-bold">Annunci</h1>
        <div class="container-fluid">
            <h3 class="py-4">Categorie</h3>
        </div>
        <section class="customer-logos slider">
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-pc-display display-4 d-block"></i>Informatica
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-joystick display-4 d-block"></i>Console e Videogiochi
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-camera display-4 d-block"></i>Fotografia
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-phone display-4 d-block"></i>Telefonia
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-tv display-4 d-block"></i>Informatica
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-music-note-beamed display-4 d-block"></i>Musica
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-tree display-4 d-block"></i>Informatica
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-watch display-4 d-block"></i>Informatica
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-bicycle display-4 d-block"></i>Informatica
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-pc-display display-4 d-block"></i>Informatica
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