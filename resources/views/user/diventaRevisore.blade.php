<x-layout>
    <x-header>
        <h1 class="pt-5 text-center tx-a">Diventa Revisore</h1>
    </x-header>
    
    <div class="container-fluid my-3 py-3">
    <div class="row justify-content-center">
        <div class="col-8">
            <form id="contactForm" class="w-100 contactFormAni border" method="GET" action="{{route('become.revisor')}}">
                @csrf
                
                <div class="mb-3 px-5">
                    <label class="form-label ff-m lead tx-t" for="name">Nome e Cognome</label>
                    <input class="form-control ff-m lead @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Inserisci il tuo nome" data-sb-validations="required" value="{{ old('name') }}" />
                    <div class="invalid-feedback bg-alert" data-sb-feedback="name:required">Nome è obbligatorio.</div>
                    
                </div>
                
                <div class="mb-3 px-5">
                    <label class="form-label ff-m lead tx-t" for="email">Indirizzo Email</label>
                    <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Inserisci la tua mail" data-sb-validations="required, email" value="{{ old('email') }}" />
                    <div class="invalid-feedback bg-alert" data-sb-feedback="emailAddress:required">Email è obbligatoria, inserisci una mail valida.</div>
                    
                </div>
                
                <div class="mb-3 px-5">
                    <label class="form-label ff-m lead tx-t" for="message">Parlaci di te</label>
                    <textarea class="form-control  @error('message') is-invalid @enderror" id="message" name="message" type="text" placeholder="Scrivi il tuo messaggio qui" style="height: 10rem;" data-sb-validations="required" value="{{ old('message') }}"></textarea>
                    <div class="invalid-feedback bg-alert" data-sb-feedback="message:required">Hai dimenticato di inserire il messaggio.</div>
                </div>
                
                <div class="d-grid gap-2 col-6 mt-5 d-flex m-auto mx-md-auto  hidden-top py-3">
                    <button class="btn btnIntro rounded-0 btnRichiesta text-center m-auto">Invia la tua Richiesta</button>
                </div>
                
            </form>
        </div>
    </div>
</div>

</x-layout>