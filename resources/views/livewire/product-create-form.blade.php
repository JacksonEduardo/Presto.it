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
        
        <div class="mb-3">
            <label for="temporary_images" class="form-label">Inserisce Immagine :</label>
            <input name="images" wire:model="temporary_images" type="file" multiple class="form-control @error('temporary_images') is-invalid @enderror" id="temporary_images">
            @error('temporary_images') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        @if (!empty($images))
        <div class="row">
            
            <div class="col-12">
                <p>Photo Preview</p>
                <div class="row py-4 border-4">
                    @foreach($images as $key => $image)
                    <div class="col my-3">
                        <div class="img-preview mx-auto img-fluid" style="background-image: url({{$image->temporaryUrl()}});"></div>
                        <button type="button" class="btn btn-danger d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
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
            <label for="category">Categoria</label>
            <select wire:model.defer="category" id="category" class="form-control @error('category') is-invalid @enderror">
                <option value="">Scegli la Categoria</option>
                @error('category') <span class="error">{{ $message }}</span> @enderror
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->type}}</option>
                @endforeach
            </select>
        </div>
        
        
        <a href="{{route('product.create')}}">
            <button type="submit" class="btn btn-dark">Submit</button>
        </a>
        
    </form>