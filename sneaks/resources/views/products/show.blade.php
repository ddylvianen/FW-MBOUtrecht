@extends('layouts.app')

@section('content')
    <x-section>
        <div class="col-md-6">
            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <h4 class="mt-3">Price: ${{ $product->price }}</h4>
            <button class="btn btn-primary mt-4">Add to Cart</button>
        </div>
    </x-section>
@endsection