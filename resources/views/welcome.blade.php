<x-layout>


    <div class="bg-light p-5 text-center">
        <h1>Presto.it</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-3">

            @forelse ($products as $product)
                <div class="col-12 col-md-4 p-3">
                    <x-cardProduct :Product="$product" />

                </div>
        
         @empty

            <div class="col-12">
                <h1>Non sono ancora presenti annunci</h1>

                <p> Inserisci il tuo primo annuncio! </p>
                <a href="{{ route('product.create') }}" class="btn btn-dark">Inserisci Annuncio</a>

            </div>
            @endforelse

        </div>
    </div>

</x-layout>
