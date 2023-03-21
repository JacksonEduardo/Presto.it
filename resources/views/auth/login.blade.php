
<x-layout>


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
    
        <button type="submit" class="btn btn-dark">Accedi</button>
    </form>

</x-layout>

