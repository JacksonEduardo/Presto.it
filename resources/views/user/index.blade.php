<x-layout>

    <div class="py-5"></div>   
        
    {{-- COMUNE A TUTTI --}}
    <div class="row d-flex justify-content-center align-items-center mb-5 m-0">
        <div class="col-12 col-md-10">
            <div class="border m-0">
                <div class="rounded-top text-white d-flex flex-row topCardProfile">
                    <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                        @if($user->profilePicture)
                        <img src="{{ Storage::url($user->profilePicture) }}" alt="Generic placeholder image"
                        class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                        
                        @else
                        <img src="\media\guest.png" alt=""
                        class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">

                        @endif
                        
                        
                    </div>
                
                    <div class="ms-3" style="margin-top: 130px;">
                        <h5>{{ $user->name }}</h5>
                    
                    </div>
                    
                </div>
                {{-- SE SONO SUL MIO PROFILO --}}
                @if (Auth::user() && Auth::user()->id == $user->id)
                    
                    
                    @if (session('avatarUpdated'))
                        <div class="alert alert-success marginAlert">
                            {{ session('avatarUpdated') }}
                        </div>
                    @endif

                <div class="card-body p-4 text-black ">
                    <h3 class="fw-normal mt-2 ms-2 mb-0"> {{__('ui.areaPersonale')}}</h3>
                    <div class="mb-2 d-flex justify-content-between bg-light">
                        <div class="container p-4 text-black align-items-center">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 py-2">
                                    <p class="lead fw-normal mt-2 mb-0">
                                        {{__('ui.campoFoto')}}
                                    </p>
                                    <form action="{{ route('user.avatar', ['user' => Auth::user()]) }}" method="POST"
                                    enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                    
                                        <input type="file" name="profilePicture" class="my-2 d-block">
                                        <button type="submit" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                                        style="z-index: 1;">
                                        {{__('ui.modificaFoto')}}
                                        </button>
                                    </form>
                            
                                </div>
                                
                            </div>
                        </div>
                        {{-- @if(Auth::user() && Auth::user()->is_revisor)
                    
                            <div>
                                <a class="" href="{{route('revisor.index')}}"><button class="mt-3 me-3btn btn-warning">Zona revisore</button></a>

                                
                            </div>
                    
                        @endif --}}
                        
                    </div>
                </div>
                @else
                    {{-- SE NON è IL MIO PROFILO, NON LO VEDO --}}
                
                @endif

                {{-- COMUNE A TUTTI --}}
                


                <div class="card-body p-4 text-black ">
                    <div class="mb-5 ">
                        <h3 class="fw-normal mt-2 ms-2 mb-0"> {{__('ui.info')}} </h3>
                        <div class="container py-3 tx-m bg-light rounded">
                            <div class="row p-0 w-100 mx-0">
                                <div class="col-6 col-md-3 p-0 h-50 my-auto mx-auto">
                                    <p class="lead fw-normal text-center tx-a">Ruolo</p>
                                    <p class="font-italic mb-1 text-center mx-3 ">Revisore</p>
                                    <hr class="mt-0 tx-a">
                                </div>
                                <div class="col-6 col-md-3 p-0 h-50 my-auto mx-auto">
                                    <p class="lead fw-normal text-center tx-a">Città</p>
                                    <p class="font-italic mb-1 text-center mx-3 ">Bari</p>
                                    <hr class="mt-0 tx-a">
                                </div>
                                <div class="col-6 col-md-3 p-0 h-50 mx-auto my-auto">
                                    <p class="lead fw-normal text-center tx-a">Numero</p>
                                    <p class="font-italic mb-1 text-center mx-3 ">347------2</p>
                                    <hr class="mt-0 tx-a">
                                </div>
                                <div class="col-6 col-md-3 p-0 h-50 mx-auto my-auto">
                                    <p class="lead fw-normal text-center tx-a">Mail</p>
                                    <p class="font-italic mb-1 text-center mx-3 ">cristian@presto</p>
                                    <hr class="mt-0 tx-a">
                                </div>
                                
                                
                            </div>
                        </div>
                        {{-- SE SONO SUL MIO PROFILO --}}
                        @if(Auth::user() && Auth::user()->id == $user->id)
                            <div class="d-flex justify-content-between align-items-center my-5 bg-a rounded">
                                <p class="lead fw-normal my-3 tx-s px-3">{{__('ui.imieiannunci')}}</p>
                            </div>
                        {{-- SE NON SONO SUL MIO PROFILO --}}
                        @else
                            <div class="d-flex justify-content-between align-items-center my-5 bg-a rounded">
                                <p class="lead fw-normal my-3 tx-s px-3">{{__('ui.annuncidi')}} {{$user->name}}</p>
                            </div>
                        @endif
                        
                        {{-- COMUNE A TUTTI MA RIVEDI L'HOVER DELLE CARD --}}
                        <div class="container">
                            <div class="row">
                                @forelse ($products as $product)
                                    <div class="col-12 col-lg-4">
                                        <div class="px-3 mb-3">
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
                                        
                                    </div>
                                
                                @empty
                                
                                    <div class="col-12">
                                        <h1>{{__('ui.noAnn')}}</h1>
                                        
                                        {{-- SE SONO SUL MIO PROFILO, ma controlla --}} 
                                        @if (Auth::user()->id == $user->id)
                                        
                                            <p> {{__('ui.inserisciprimoAnn')}} </p>
                                            <a href="{{ route('product.create') }}" class="btn btn-dark">{{__('ui.inserisciAnn')}}</a>
                                        @endif
                                    </div>
                                @endforelse
                            </div>
                        </div>
                                    
                    </div>
                                
                                
                </div> 
                {{-- chiusura riga 83--}}
            </div> {{-- chiusura riga 38--}}
        </div> {{-- chiusura riga 37--}}
    </div> {{-- chiusura riga 36--}}
</x-layout>
            