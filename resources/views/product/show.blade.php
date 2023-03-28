<x-layout>
    <x-header/>
    <div class="container my-5">
        <div class="row justify-content-between">
            <div class="col-12 col-md-6">
                
                {{-- INIZIO CAROSELLO --}}
                
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @if ($product->images)
                        @foreach ($product->images as $image)
                        <div class="swiper-slide">
                            <img src="{{!$product->images()->get()->isEmpty() ? Storage::url($image->path) : "https//picsum.photos/200"}}" class="card-img-top p-3 rounded" alt="">
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @if ($product->images)
                        @foreach ($product->images as $image)
                        <div class="swiper-slide">
                            <img src="{{!$product->images()->get()->isEmpty() ? Storage::url($image->path) : "https//picsum.photos/200"}}" class="card-img-top p-3 rounded" alt="">
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                {{-- FINE CAROSELLO --}}
            </div>
            
            <div class="col-12 col-md-5 px-4">
                <div class="d-flex align-items-center">
                    <h1 class="fw-bold mt-4 me-5">{{$product->name}}</h1>
                    <div class="d-flex align-items-center mt-1">
                        <i class="bi bi-heart fs-2 text-danger mt-3" id="addFavourite"></i>
                        <i class="bi bi-cart4 fs-2 mt-2 ms-3"></i>
                    </div>
                    
                </div>
                <h2 class="fw-bold text-muted tx-a">{{$product->brand}}</h2>
                <div class="d-flex align-intems-center my-3">
                    <p class="display-5">Price:</p>
                    <p class="display-5 fw-bold ms-3">€ {{$product->price}}</p>

                </div>
                
                    
                    <hr>
                    <h4 class="fw-bold">Informazione aggiuntive sul prodotto:</h4>
                    <p class="showDescription">{{$product->description}}</p>
                    
                    
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="ms-5">
                            <h4> Categoria: </h4>
                            <p> {{$product->category->type}}</p>
                        </div>
                        <div class="me-5">
                            <h4>Condizione:</h4>
                            <p>{{$product->usage}}</p>
                        </div>
                    </div>
                    
                    <hr>
                    @if ($product->user_id == null)
                        <div class="">
                            <p class="">by Utente Cancellato</p>
                        </div>
                    @else 
                        <div class="">
                            <p class="">Created by: {{$product->user->name}}, il {{$product->created_at->format('d/m/Y')}}</p>
                        </div>
                    @endif
                </div>
            
        </div>
    </div>
</x-layout>