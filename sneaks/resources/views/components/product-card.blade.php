<a href="#" class="card text-decoration-none text-dark {{ $class ?? '' }}" style="height: 100%; display: flex; flex-direction: column;">
    <img src="{{ asset($product->image_path) }}" class="img-fluid rounded-top" alt="...">
    <div class="card-body d-flex flex-column flex-grow-1">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text flex-grow-1">{{ $product->description }}</p>
        <div class="d-flex justify-content-between align-items-center mt-auto">
            <p class="card-text">${{ $product->price }}</p>
            <span class="btn btn-primary">Add to Cart</span>
        </div>
    </div>
</a>
