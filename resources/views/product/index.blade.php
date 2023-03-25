<x-layout>
    <x-header>
        <h1 class="mt-5">Tutti gli annunci</h1>
    </x-header>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                
                @forelse ($products->where('is_accepted', true) as $product)
                
                    <div class="card">
                        <img src="https://picsum.photos/200" class="img-fluid" alt="{{$product->name}}">
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
                @empty
                    <h1>Non ci sono  prodotti per la ricerca effettuata!</h1>
                @endforelse
            
            </div>
        </div>
    </div>
</x-layout>