<x-layout>

    <x-header>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 mt-5">
                    <h1 class="prestoBackgroundAnimate RadiusCustom fw-bold display-4 text-white">{{$category->type}}</h1>
                </div>
            </div>
        </div>
    </x-header>
   
    <div class="container-fluid">
        <div class="row pb-5">
            @forelse ($category->products->where('is_accepted', true) as $product)
            <div class="col-12 col-md-3 p-4">
                <x-cardProduct :Product="$product" />
            </div>
            
            @empty
            <h1 class="py-5">{{__('ui.prodottinontrovati')}}</h1>
            @endforelse
        </div>
    </div>
</x-layout>