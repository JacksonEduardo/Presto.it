<x-layout>

    <x-header>
        <h1 class="mt-5 tx-a fw-bold">{{$category->type}}</h1>
    </x-header>
   
    <div class="container-fluid">
        <div class="row">
            @forelse ($category->products->where('is_accepted', true) as $product)
            <div class="col-12 col-md-3 p-4">
                <x-cardProduct :Product="$product" />
            </div>
            
            @empty
            <h1 class="py-5">Non ci sono  prodotti per la ricerca effettuata!</h1>
            @endforelse
        </div>
    </div>
</x-layout>