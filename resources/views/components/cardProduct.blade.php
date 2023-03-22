

<div class="card">
    <img src="https://picsum.photos/200" class="img-fluid" alt="{{$product->name}}">
    <div class="card-body">
        <h5 class="card-title">Nome Prodotto : {{$product->name}}</h5>
        <p class="card-text">Descrizione : {{$product->description}}</p>
        <small class="card-text">Prezzo: {{$product->price}}</small>
        <a class="btn btn-dark" href="{{route('product.show', compact('product'))}}">Scopri di più</a>

    </div>
    <div class="card-footer">
         <p> Categoria</p>
         <p> {{$product->category->type}}</p>
    </div>

    <div class="card-footer">
        <small class="text-muted">{{$product->created_at->format('d/m/Y')}}</small>
    </div>
</div>

