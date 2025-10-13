@extends('layouts.app')

@section('content')
    <x-section :class="'container-lg my-5'">
        <h1 class="mb-4">Products</h1>
        <x-products-table :products="$products" />
        {{ $products->links('custom.pagination') }}
    </x-section>
@endsection
