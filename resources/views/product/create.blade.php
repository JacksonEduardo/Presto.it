<x-layout>
    <x-header>
        <h1>Inserisci articolo</h1>
    </x-header>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @livewire('product-create-form', ['category'=>$category])

            </div>
        </div>
    </div>
</x-layout>