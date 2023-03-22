
<x-layout>

    <x-header>
        <h1>Accedi</h1>
    </x-header>

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-4 border shadow p-3">
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
                
                    <button type="submit" class="btn btn-dark">Accedi</button>
                </form>
            </div>
        </div>
    </div>        
</x-layout>

