<x-layout>
    
    <div class="container vh-100 d-flex align-items-center">
        <div class="containerModal h-75 w-100" id="containerModal">
            <div class="form-container sign-up-container">
                <form class="formModal" method="POST" action="{{route('register')}}">
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
                    <h1 class="text-center ">{{__('ui.registrati')}}</h1>
                    <div class="social-container d-flex justify-content-center text-center m-0">
                        <a href="#" class="social"><i class="bi bi-google fs-5"></i></a>
                        <a href="#" class="social"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="social"><i class="bi bi-twitter fs-5"></i></a>
                    </div>
                    <p class="text-center lead m-0">{{__('ui.latuamail')}}</p>
                    <input class="inputModal" type="text" name="name" placeholder="{{__('ui.namelabel')}}" id="name" />
                    <input class="inputModal" type="email" name="email" placeholder="Email" id="email" />
                    <input class="inputModal" type="password" placeholder="Password" id="password" name="password" />
                    <input class="inputModal" class="mb-3" type="password" placeholder="{{__('ui.confermapassw')}}" id="password_confirmation" name="password_confirmation"/>
                    <button class="mb-3 buttonModal d-flex ">{{__('ui.crea')}}</button>
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
                    <div class="social-container d-flex">
                        <a href="#" class="social"><i class="bi bi-google fs-5"></i></a>
                        <a href="#" class="social"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="social"><i class="bi bi-twitter fs-5"></i></a>
                    </div>
                    <p class="text-center lead">{{__('ui.latuamail')}}</p>
                    <input class="inputModal" type="email" name="email" placeholder="Email" id="email"/>
                    <input class="inputModal" type="password" placeholder="Password" id="password" name="password" />
                    <input class="inputModal" type="checkbox" class="form-check-input" id="remember" checked>
                    <label class="form-check-label" for="remember">{{__('ui.ricordami')}}</label>
                    <a href="#">{{__('ui.pswdimenticata')}}</a>
                    <button class="mt-2 buttonModal ">{{__('ui.accedi')}}</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>{{__('ui.accediconaccount')}}</h1>
                        <p>{{__('ui.inseriscidati')}}</p>
                        <button class="ghost btnIntro border" id="signIn">{{__('ui.login')}}</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>{{__('ui.iscrivitiora')}}</h1>
                        <p>{{__('ui.registratipochi')}}</p>
                        <button class="ghost btnIntro border" id="signUp">{{__('ui.registrati')}}</button>
                    </div>
                </div>
            </div>
        </div>  
        
    </div>
    
</div>
</div>
</div>

</div>           

</x-layout>