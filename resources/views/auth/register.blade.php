<x-layout>

    <x-header>
        <h1>Registrati</h1>
    </x-header>
    

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6 border shadow p-3">
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
                    
                    <a href="{{route('product.create')}}">
                        <button type="submit" class="btn btn-dark">Registrati</button>
                    </a>
            </div>
        </div>
    </div>
    
    </form>

</x-layout>