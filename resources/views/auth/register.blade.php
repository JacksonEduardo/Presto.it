<x-layout>

    <x-header>
        <h1>Presto.it</h1>
    </x-header>

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
        
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>

</x-layout>