<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
    @foreach ($products as $product)
        <div>
            <x-product-card :product="$product" />
        </div>
    @endforeach
</div>
