<x-layout>
    <x-header>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 mt-5">
                    <h1 class="prestoBackgroundAnimate RadiusCustom fw-bold display-4 text-white">Zona Revisore</h1>
                </div>
            </div>
        </div>
    </x-header>
    
    @if (session('productAccepted'))
    <div class="alert alert-dark d-flex align-items-center">
        {{ session('productAccepted') }}
    </div>
    @endif
    @if (session('productRejected'))
    <div class="alert alert-dark d-flex align-items-center">
        {{ session('productRejected') }}
    </div>
    @endif
    @if (session('productUndo'))
    <div class="alert alert-dark">
        {{ session('productUndo') }}
    </div>
    @endif
    @if (session('productUndo2'))
    <div class="alert alert-dark">
        {{ session('productUndo2') }}
    </div>
    @endif
    
    <div class="container-fluid">
        
        <div class="row justify-content-center">
            <div class="col-10 mb-5">
                <div class="mb-4 mx-auto">
                    <h2 class="text-center ps-3">Operazioni</h2>
                    <form class="ps-4 text-center" action="{{route('revisor.undo_product')}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn bg-a text-white">Annulla operazione</button>
                    </form>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="lead fs-4">Annunci confermati: 0</p>
                    <p class="lead fs-4">Annunci in sospeso: 0</p>
                    <p class="lead fs-4">Annunci annullati: 0</p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-10">
                <div class="accordion" id="accordionExample">
                    @foreach ($product_to_check as $item)
                    <div class="accordion-item">
                        <div class="accordion-header d-flex align-items-center">
                            <form action="{{route('revisor.accept_product' , ['product'=>$item])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn bg-a m-2 py-2 px-3 text-white">
                                    <i class="fs-5 bi bi-check-lg"></i>
                                </button>
                            </form>
                            <form action="{{route('revisor.reject_product' , ['product'=>$item])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn bg-dark m-2 py-2 px-3 text-white">
                                    <i class="fs-5 bi bi-x-lg"></i>
                                </button>
                            </form>
                            <button class="accordion-button lead fs-5 text-black" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_{{$loop->iteration}}" aria-expanded="true" aria-controls="collapseOne">
                                <h2 class="fw-light">Annuncio | {{$item->name}}</h2>
                            </button>
                        </div>
                        <div id="collapseOne_{{$loop->iteration}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex">
                                <div id="carouselExample" class="carousel slide" width=50>
                                    <div class="carousel-inner">
                                        @if ($item->images)
                                        @foreach ($item->images as $image)
                                        <div class="carousel-item active">
                                            <img src="{{!$item->images()->get()->isEmpty() ? Storage::url($image->path) : "https//picsum.photos/200"}}" class="card-img-top p-3 rounded" alt="">
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <div class="d-block">
                                    <h4 class="px-3 pb-1">{{$item->user->name}}</h4>
                                    <h5 class="px-3 pb-1">€{{$item->price}}</h5>
                                    <h5 class="ps-3 px3 pb-1 fw-light">{{$item->category->type}}</h5>
                                    <p class="px-3 pb-1 lead">{{$item->description}}</p>
                                    <small class="px-3">{{$item->created_at->format('d/m/Y')}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>