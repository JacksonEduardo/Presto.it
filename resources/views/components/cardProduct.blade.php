
{{-- 
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
</div> --}}

{{-- DA RIVEDERE --}}
<div class="px-3 px-md-5 pb-3 pb-md-5 mx-3 mx-md-5 mb-3 mb-md-5 ">
    <article class="card card--1 m-0">
        <div class="card__info-hover">
            <i class="bi bi-bag-plus fs-5"></i>
            <i class="bi bi-heart fs-5 ms-3"></i>
            <div class="card__clock-info">
                <i class="bi bi-stopwatch fs-5"></i>
                <small>{{$product->created_at->format('d/m/Y')}}</small>
            </div> 
        </div>
        
        <div class="card__img" style="background-image: url('https://picsum.photos/200')"></div>
        <a href="{{route('product.show', compact('product'))}}" class="card_link">
            <div class="card__img--hover" style="background-image: url('https://picsum.photos/200')"></div>
        </a>
        <div class="card__info">
            <span class="">{{$product->category->type}}</span>
            <h3 class="">{{$product->name}}</h3>
            <h2 class="">€{{$product->price}}</h2>
            <span class="">by <a href="{{route('user.index')}}" class="card__author" title="author">{{$product->user->name}}</a></span>
        </div>
    </article>
</div>