<x-layout>
  <x-header/>
    <div class="container my-5">
      <div class="row justify-content-between">
          <div class="col-12 col-md-7 my-md-0">
              
              {{-- INIZIO CAROSELLO ORIZZONTALE--}}
              
              {{-- <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 RadiusCustom">
                  <div class="swiper-wrapper">
                      @if ($product->images)
                      @foreach ($product->images as $image)
                      <div class="swiper-slide">
                          <img class="RadiusCustom" src="{{!$product->images()->get()->isEmpty() ? $image->getUrl(400,400) : "https//picsum.photos/200"}}" class="card-img-top p-3 rounded" alt="">
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
                          <img class="RadiusCustom" src="{{!$product->images()->get()->isEmpty() ? $image->getUrl(400,400) : "https//picsum.photos/200"}}" class="card-img-top p-3 rounded" alt="">
                      </div>
                      @endforeach
                      @endif
                  </div>
              </div> --}}
            {{-- FINE CAROSELLO ORIZZONTALE--}}


            {{-- INIZIO CAROSELLO VERTICALE--}}
           
                <div class="gallery-container h-75">
                  <div class="swiper-container gallery-main h-100 RadiusCustom">
                    <div class="swiper-wrapper RadiusCustom border-0">
                      @if ($product->images)
                      @foreach ($product->images as $image)
                      <div class="swiper-slide border-0">
                        <img class="img-fluid h-100 RadiusCustom border-0" src="{{!$product->images()->get()->isEmpty() ? $image->getUrl(400,400) : "https//picsum.photos/200"}}" alt="Slide 01">
                      </div>
                      @endforeach
                      @endif
                      <div class="swiper-button-prev tx-a"></div>
                      <div class="swiper-button-next tx-a"></div>
                    </div>
                  </div>
                  <div class="swiper-container mySwipeCont gallery-thumbs RadiusCustom">
                    <div class="swiper-wrapper RadiusCustom">
                      @if ($product->images)
                      @foreach ($product->images as $image)
                      <div class="swiper-slide my-1">
                        <img class="RadiusCustom slideResponsive" src="{{!$product->images()->get()->isEmpty() ? $image->getUrl(400,400) : "https//picsum.photos/200"}}" alt="Slide 01">
                      </div>
                      @endforeach
                      @endif
                    </div>
                  </div>
                </div>
              
          </div>
           {{-- FINE CAROSELLO VERTICALE--}}
          <div class="col-12 col-md-5 px-4">
              <div>
                  <h4 class="prestoBackgroundAnimate RadiusCustom fw-bold text-center display-4 text-white px-4">{{$product->name}}</h4>
                  <h2 class="fw-bold ps-2 tx-a">{{$product->brand}}</h2>
                  <span class="d-flex ps-2">
                      <p class="display-5 text-center">{{__('ui.prezzo')}} </p>
                      <p class="display-5 fw-bold ms-3">€ {{$product->price}}</p>
                  </span>
                  {{-- <div class="d-flex align-items-center mt-1">
                      <i class="bi bi-heart fs-2 text-danger mt-3" id="addFavourite"></i>
                      <i class="bi bi-cart4 fs-2 mt-2 ms-3"></i>
                  </div> --}}
              </div>

              <hr>

              <h4 class="fw-bold">{{__('ui.infoprod')}}</h4>
              <p class="showDescription lead">{{$product->description}}</p>
              
              <div class="d-flex align-items-center justify-content-between pt-4">
                  <div class="ms-5">
                      <h4 class="fw-bold">{{__('ui.categoriaprod')}} </h4>
                      <p class="lead">{{$product->category->type}}</p>
                  </div>
                  <div class="me-5">
                      <h4 class="fw-bold">{{__('ui.condizioneprod')}}</h4>
                      <p class="lead">{{$product->usage}}</p>
                  </div>
              </div>
              
              <hr>

              @if ($product->user_id == null)
              <div class="">
                  <p class="lead">{{__('ui.bynull')}}</p>
              </div>
              @else 
              <div class="">
                  <p class="lead">{{__('ui.creatoda')}} {{$product->user->name}}, {{__('ui.il')}} {{$product->created_at->format('d/m/Y')}}</p>
              </div>
              @endif
          </div>
          
      </div>
    </div>
</x-layout>