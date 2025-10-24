@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>{{ $item->name }}</h1>
                <p>{{ $item->description }}</p>
                <h3>${{ number_format($item->price, 2) }}</h3>
                <form action="{{ route('cart.add', $item->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection
