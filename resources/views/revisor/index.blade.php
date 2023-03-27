<x-layout>
    {{-- @dd($product_checked) --}}
    <x-header>
        <h1 class="p-5 bg-light text-dark mt-5">
            {{$product_to_check ? 'ANNUNCI DA REVSIONARE' : 'Non ci sono Annunci da Revisionare'}}
        </h1>
    </x-header>
{{-- messaggi update --}}

    @if (session('productAccepted'))
    <div class="alert alert-success">
        {{ session('productAccepted') }}
    </div>
    <form action="{{route('revisor.undo_product')}}" method="POST">
        @csrf
        @method('PATCH')
        <button type="submit" class="btn btn-warning shadow">Annulla Operazione</button>
    </form>
    @endif
    @if (session('productRejected'))
    <div class="alert alert-danger">
        {{ session('productRejected') }}
    </div>
    <form action="{{route('revisor.undo_product')}}" method="POST">
        @csrf
        @method('PATCH')
        <button type="submit" class="btn btn-warning shadow">Annulla Operazione</button>
    </form>
    @endif
    @if (session('productUndo'))
    <div class="alert alert-warning">
        {{ session('productUndo') }}
    </div>
    @endif



    {{-- RIVEDI BENE FRONT END --}}
    <div class="container-fluid">
        <div class="row container-fluid">
            <div class="col-9">
                <div class="container">
                    <div class="row">
                        @if($product_to_check)
                        @foreach ($product_to_check as $item)
                            
                        
                        <div class="col-lg-4 col-12">
                            <div class="">
                                <article class="card card--1 m-0">
                                    <div class="card__info-hover">
                                        <i class="bi bi-bag-plus fs-5"></i>
                                        <i class="bi bi-heart fs-5 ms-3"></i>
                                        <div class="card__clock-info">
                                            <i class="bi bi-stopwatch fs-5"></i>
                                            <small>{{$item->created_at->format('d/m/Y')}}</small>
                                        </div> 
                                    </div>
                                    
                                    <div class="card__img" style="background-image: url('https://picsum.photos/200')"></div>
                                    <a href="{{--route('product.show', compact('product'))--}}" class="card_link">
                                        <div class="card__img--hover" style="background-image: url('https://picsum.photos/200')"></div>
                                    </a>
                                    <div class="card__info">
                                        <span class="">{{$item->category->type}}</span>
                                        <h3 class="">{{$item->name}}</h3>
                                        <h2 class="">€{{$item->price}}</h2>
                                        {{-- <span class="">by <a href="#" class="card__author" title="author">{{$item->user->name}}</a></span> --}}
                                        <div>
                                            <form action="{{route('revisor.accept_product' , ['product'=>$item])}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success shadow">Accetta</button>
                                        </form>
                                        </div>
                                        {{-- dashboard revisore --}}
                                        <div>
                                            <form action="{{route('revisor.reject_product' , ['product'=>$item])}}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                                            </form>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                            
                        @endforeach
                            
                        
                        @else
                        
                        <h1>non ci sta niente</h1>
                        
                        @endif
                        
                        
                        
                    </div>
                </div>
        
            </div>
            <div class="col-3 bg-light">
                <form class=" bg-dark mx-auto text-center my-5" action="{{route('revisor.undo_product')}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-warning shadow">Annulla Operazione</button>
                </form>
    
            </div>
    
        </div>

    </div>
    








</x-layout>