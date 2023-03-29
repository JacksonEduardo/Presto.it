<x-layout>
    <x-header>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 mt-5">
                    <h1 class="prestoBackgroundAnimate RadiusCustom fw-bold display-4 text-white">{{__('ui.annunci')}}</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <h3 class="py-4 display-5">{{__('ui.categorie')}}</h3>
        </div>
        <section class="customer-logos slider">
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-pc-display display-4 d-block"></i>
                    <p class="lead textCategory">{{__('ui.informatica')}}</p> 
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-joystick display-4 d-block"></i>
                    <p class="lead textCategory">{{__('ui.console')}}</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-camera display-4 d-block"></i>
                    <p class="lead textCategory">{{__('ui.fotografia')}}</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-phone display-4 d-block"></i>
                    <p class="lead textCategory">{{__('ui.telefonia')}}</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-tv display-4 d-block"></i>
                    <p class="lead textCategory">{{__('ui.informatica')}}</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-music-note-beamed display-4 d-block"></i>
                    <p class="lead textCategory">{{__('ui.musica')}}</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-tree display-4 d-block"></i>
                    <p class="lead textCategory">{{__('ui.giardino')}}</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-droplet display-4 d-block"></i>
                    <p class="lead textCategory">{{__('ui.elettrodomestici')}}</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-bicycle display-4 d-block"></i>
                    <p class="lead textCategory">{{__('ui.sport')}}</p>
                </a>
            </div>
            <div class="slide fs-5">
                <a href="">
                    <i class="bi bi-car-front display-4 d-block"></i>
                    <p class="lead textCategory">{{__('ui.motori')}}</p>
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
            <h1 class="py-5">{{__('ui.prodottinontrovati')}}</h1>
            @endforelse
            <div class="d-flex justify-content-center">
                {{$products->links()}}
            </div>
        </div>
    </div>
</x-layout>