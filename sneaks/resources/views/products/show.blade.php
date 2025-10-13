@extends('layouts.app')

@section('content')
    <x-section :class="'container-lg clearfix my-5'">
        <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="col-md-6 col-lg-5 float-md-start mb-3 me-md-4 img-fluid rounded shadow">

        <h1 class="display-5 fw-bold mb-3">{{ $product->name }}</h1>
        <p class="lead text-muted mb-4">{{ $product->description }}</p>

        <div class="mb-4">
            <h3 class="text-primary mb-0">${{ number_format($product->price, 2) }}</h3>
            <small class="text-muted">Price includes tax</small>
        </div>

        <div class="mb-4">
            <span class="badge bg-success me-2">{{ $product->stock }} in stock</span>
        </div>

        <div class="d-grid d-sm-flex gap-2 mb-4">
            <button class="btn btn-primary btn-lg">
                <i class="bi bi-cart-plus me-2"></i>Add to Cart
            </button>
            <button class="btn btn-outline-secondary btn-lg">
                <i class="bi bi-heart me-2"></i>Wishlist
            </button>
        </div>
    </x-section>
@endsection
