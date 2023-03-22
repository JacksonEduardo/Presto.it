<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                
                {{-- INIZIO CAROSELLO --}}
                
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        
                    </div>
                </div>
                {{-- FINE CAROSELLO --}}
            </div>
            
            <div class="col-12 col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Nome Prodotto : {{$product->name}}</h5>
                    <p class="card-text">Descrizione : {{$product->description}}</p>
                    <small class="card-text">Prezzo: {{$product->price}}</small>           
                </div>
                <div class="card-footer">
                    <p> Categoria</p>
                    <p> {{$product->category->type}}</p>
                    
                </div>
                
                <div class="card-footer">
                    <small class="text-muted">{{$product->created_at->format('d/m/Y')}}</small>
                </div>
            </div>
            
        </div>
    </div>
</x-layout>