{{-- <x-layout>
    <x-header>
      <h1 class="mt-5 tx-a fw-bold">Inserisci Annuncio</h1>
    </x-header>


    <div class="container-fluid">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6 border shadow p-3"> 

                @livewire('product-create-form')

            </div>
        </div>
    </div>
</x-layout>
 --}}

 <x-layout>
    <x-header>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 mt-5">
                    <h1 class="RadiusCustom fw-bold display-4 tx-a">{{__('ui.inserisciCreate')}}</h1>
                </div>
            </div>
        </div>
    </x-header>

    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-5 order-last order-md-first stickyForm">
                <div class="h-100 p-5 pb-3 text-white text-shadow-1 prestoBackgroundAnimate RadiusCustom">
                    <img src="/media/prestowhite.png" width="300" alt="">
                    <h3 class="my-5 display-6 lh-1 fw-bold">{{__('ui.seguiconsigli')}}</h3>
                    <p class="lead">1. Lorem ipsum dolor sit amet</p>
                    <p class="lead">2. Lorem ipsum dolor sit amet</p>
                    <p class="lead">3. Lorem ipsum, dolor sit amet</p>
                  </div>
            </div>

            <div class="col-12 col-md-5 border shadow p-3 RadiusCustom"> 
                @livewire('product-create-form')
            </div>
        </div>
    </div>
</x-layout>