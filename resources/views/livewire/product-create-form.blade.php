<form wire:submit.prevent="store" enctype="multipart/form-data">
    @csrf
    
    @if (session('productCreated'))
    <div class="alert alert-success">
        {{ session('productCreated') }}
    </div>
    @endif
    
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
        
        <div class="mb-3">
            <label for="name" class="form-label">Nome del prodotto :</label>
            <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" >
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Marchio :</label>
            <input wire:model="brand" type="text" class="form-control @error('brand') is-invalid @enderror" id="brand">
            @error('brand') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione :</label>
            <textarea wire:model="description" id="description" cols="30" rows="7" class="form-control @error('description') is-invalid @enderror"></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo :</label>
            <input wire:model="price" type="double" class="form-control @error('price') is-invalid @enderror" id="price">
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        {{-- <div class="mb-3">
            <label for="bestsellers" class="form-label">I Film campioni d'incassi</label>
            <select wire:model="bestsellers" id="bestsellers" multiple class="form-control">
                @foreach($movies as $movie)
                <option value="{{$movie->id}}">{{$movie->title}}, {{$movie->director}}</option>
                @endforeach
                
            </select>
        </div> --}}
        
        {{-- INPUT --}}
        
        <div class="form-check">
            <input class="form-check-input @error('usage') is-invalid @enderror" type="radio" wire:model="usage" value="usato">
            
            <label class="form-check-label" for="usato" >
                Usato
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('usage') is-invalid @enderror" type="radio" wire:model="usage" value="nuovo">
            <label class="form-check-label" for="nuovo">
                Nuovo
            </label>
        </div>
        
        <div class="mb-3">
            <select wire:model="category" id="category" multiple class="form-control">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->type}}</option>
                @endforeach
            </select>
        </div>
        
        <a href="{{route('product.create')}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </a>
    </form>