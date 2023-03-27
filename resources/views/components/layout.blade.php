<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    {{-- link al carosello --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    {{-- link livewire --}}
    @livewireStyles
    {{-- link ai font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,300&family=Source+Sans+Pro:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">
    
    <x-navbar /> 
    
    <div class="min-vh-100 ">
        {{$slot}}    
    </div>
    
    <x-footer /> 
    
    {{-- MODALE PER LOGIN  --}}
    
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <button type="button" class="btn-close fs-1 bg-transparent" data-bs-dismiss="modal">
            </button>
            <div class="containerModal" id="containerModal">
                <div class="form-container sign-up-container">
                    <form method="POST" action="{{route('register')}}">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        @csrf
                        <h1 class="mt-2 text-center">Registrati</h1>
                        <div class="social-container text-center">
                            <a href="#" class="social"><i class="bi bi-google fs-5"></i></a>
                            <a href="#" class="social"><i class="bi bi-facebook fs-5"></i></a>
                            <a href="#" class="social"><i class="bi bi-twitter fs-5"></i></a>
                        </div>
                        <p class="text-center lead">o usa la tua email</p>
                        <input class="inputModal" type="text" name="name" placeholder="Nome" id="name" />
                        <input class="inputModal" type="email" name="email" placeholder="Email" id="email" />
                        <input class="inputModal" type="password" placeholder="Password" id="password" name="password" />
                        <input class="inputModal" class="mb-3" type="password" placeholder="Conferma Password" id="password_confirmation" name="password_confirmation"/>
                        <button class="mb-3 buttonModal">Crea</button>
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <form class="formModal" method="POST" action="{{route('login')}}">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @csrf
                        <h1>Login</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="bi bi-google fs-5"></i></a>
                            <a href="#" class="social"><i class="bi bi-facebook fs-5"></i></a>
                            <a href="#" class="social"><i class="bi bi-twitter fs-5"></i></a>
                        </div>
                        <p class="text-center lead">o usa la tua email</p>
                        <input class="inputModal" type="email" name="email" placeholder="Email" id="email"/>
                        <input class="inputModal" type="password" placeholder="Password" id="password" name="password" />
                        <input class="inputModal" type="checkbox" class="form-check-input" id="remember" checked>
                        <label class="form-check-label" for="remember">Ricordami</label>
                        <a href="#">Password dimenticata?</a>
                        <button class="mt-2">Accedi</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Accedi presto, se hai già un account</h1>
                            <p>Inserisci qui i tuoi dati</p>
                            <button class="ghost" id="signIn">Login</button>
                        </div>
                        {{-- <div class="modal-content modal-footer buttonModalCustom1">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                <i class="bi bi-x-lg fs-1 text-light"></i>
                            </button>
                        </div> --}}

                        <div class="overlay-panel overlay-right">
                            <h1>Iscriviti ora se non sei ancora registrato</h1>
                            <p>Registrati in pochi secondi</p>
                            <button class="ghost" id="signUp">Registrati</button>
                        </div>

                    </div>
                </div>
            </div>  
        </div>

            {{-- <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('login')}}">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Indirizzo email</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" checked>
                            <label class="form-check-label" for="remember">Ricordami</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-dark ">Accedi</button>
                        </div>
                        
                    </form>
                </div> --}}
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                </div> --}}
            {{-- </div> --}}
        </div>
    </div>
    
    
    {{-- MODALE REGISTER  --}}
    {{-- <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrati</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('register')}}">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Inserisci email</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome utente</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Inserisci password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Conferma password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('product.create')}}">
                                <button type="submit" class="btn btn-dark">Registrati</button>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div> --}}
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
            </div> --}}
        {{-- </form> --}}

        {{-- NUOVA MODALE --}}
       
        
    </div>
    
    
</div>
</div>
</div>




@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>