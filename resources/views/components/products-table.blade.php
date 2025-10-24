<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-lx-5 g-2 g-lg-3">
    @foreach ($products as $product)
        <div class="p-3">
            <x-product-card :product="$product" />
        </div>
    @endforeach
</div>
