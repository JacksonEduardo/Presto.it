<x-layout>
    <x-header>
      <h1 class="mt-5 tx-a fw-bold display-4">{{__('ui.Diventa Revisore')}}</h1>
    </x-header>

    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-5 order-last order-md-first">
                <div class="h-100 p-5 pb-3 text-white text-shadow-1 prestoBackgroundAnimate RadiusCustom">
                    <img src="/media/prestowhite.png" width="300" alt="">
                    <h3 class="my-5 display-6 lh-1 fw-bold">{{__('ui.titolocard')}}</h3>
                    <p class="my-5">1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel facilis omnis ratione iste hic possimus dicta minus eum fugit voluptatum, culpa esse rerum aut corporis, temporibus sint magni tempora vero.</p>
                    <p class="my-5">2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quam commodi provident ipsa perferendis asperiores rem rerum, at corporis impedit pariatur cumque nobis similique. Repudiandae suscipit quas nesciunt sunt exercitationem?</p>
                    <p class="my-5">3. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet incidunt cumque nulla, id voluptatum rem nostrum, labore mollitia excepturi asperiores et accusantium sequi eius modi ipsa quaerat omnis amet reprehenderit.</p>
                  </div>
            </div>

            <div class="col-12 col-md-5 border shadow RadiusCustom my-3"> 
                <form id="contactForm" class="w-100 contactFormAni" method="GET" action="{{route('become.revisor')}}">
                    @csrf
                    
                    <div class="my-3">
                        <label class="form-label lead " for="name">{{__('ui.camponome')}}</label>
                        <input class="form-control ff-m lead @error('name') is-invalid @enderror" id="name" name="name" type="text" data-sb-validations="required" value="{{ old('name') }}" />
                        <div class="invalid-feedback bg-alert" data-sb-feedback="name:required">{{__('ui.errorenome')}}</div>
                        
                    </div>
                    
                    <div class="my-3">
                        <label class="form-label lead" for="email">{{__('ui.campoemail')}}</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" data-sb-validations="required, email" value="{{ old('email') }}" />
                        <div class="invalid-feedback bg-alert" data-sb-feedback="emailAddress:required">{{__('ui.erroreemail')}}</div>
                        
                    </div>
                    
                    <div class="my-3">
                        <label class="form-label lead" for="message">{{__('ui.parlacidite')}}</label>
                        <textarea class="form-control  @error('message') is-invalid @enderror" id="message" name="message" type="text" style="height: 10rem;" data-sb-validations="required" value="{{ old('message') }}"></textarea>
                        <div class="invalid-feedback bg-alert" data-sb-feedback="message:required">{{__('uierroreparlaci.')}}</div>
                    </div>
                    
                    <div>
                        <button class="btn bg-a mt-3 text-white lead">{{__('ui.inviarichiesta')}}</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>