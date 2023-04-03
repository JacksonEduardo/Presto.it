<x-layout>
    <x-header>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 mt-5">
                    <h1 data-aos="zoom-out" data-aos-duration="700" class="RadiusCustom fw-bold display-4 tx-a">Modifica Annuncio</h1>
                </div>
            </div>
        </div>
    </x-header>

    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-5 order-last order-md-first">
                <div class="h-100 p-5 pb-3 text-white text-shadow-1 border border-primary RadiusCustom">
                    <p class="tx-m">Le Foto Attuali</p>
                    
                       {{--  @foreach ($product->images as $key => $image) --}}
                       
                        
                       
                       <div class="col-12 col-md-3 my-3 ">
                                @foreach ($product->images as $key => $image)
                                <div class="img-preview mx-auto img-fluid border d-flex">
                                    <img src="/storage/{{$image['path']}}" width="200" height="200" alt="">
                                </div>
                                
                                @endforeach
                            </div>
                        {{-- @endforeach --}}

                    {{-- <img src="/media/prestowhite.png" width="300" alt="">
                    <h3 class="my-5 display-6 lh-1 fw-bold">{{__('ui.seguiconsigli')}}</h3>
                    <h4>{{__('ui.scattafoto')}}</h4>
                    <p class="lead">1. {{__('ui.scattafotodesc')}}</p>
                    <h4>{{__('ui.scegliprezzo')}}</h4>
                    <p class="lead">2. {{__('ui.scegliprezzodesc')}}</p>
                    <h4>{{__('ui.scriviannuncio')}}</h4>
                    <p class="lead">3. {{__('ui.scriviannunciodesc')}}</p> --}}
                  </div>
            </div>

            <div class="col-12 col-md-5 border shadow p-3 RadiusCustom"> 
                @livewire('product-edit-form', ['product' => $product])
            </div>
        </div>
    </div>
</x-layout>