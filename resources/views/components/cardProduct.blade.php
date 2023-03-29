<article class="card card--1 m-0">
    <div class="card__info-hover">
        <i class="bi bi-bag-plus fs-3"></i>
        <i class="bi bi-heart fs-3 ms-3"></i>
        <div class="card__clock-info">
            <i class="bi bi-stopwatch fs-3"></i>
            <small>{{$product->created_at->format('d/m/Y')}}</small>
        </div> 
    </div>
    
    <div class="card__img" style="background-image: url({{!$product->images()->get()->isEmpty() ? $product->images()->first()->getUrl(600,400) : 'https://picsum.photos/200'}})"></div>
    <a href="{{route('product.show', compact('product'))}}" class="card_link">
        <div class="card__img--hover" style="background-image: url({{!$product->images()->get()->isEmpty() ? $product->images()->first()->getUrl(600,400) : 'https://picsum.photos/200'}})"></div>
    </a>
    <div class="card__info">
        <span class="lead">{{$product->category->type}}</span>
        <h3 class="">{{$product->name}}</h3>
        <h2 class="fw-bold">€ {{$product->price}}</h2>
        <span class="">by <a href="{{route('user.index', ['userId'=>$product->user->id])}}" class="card__author" title="author">{{$product->user->name}}</a></span>
    </div>
</article>