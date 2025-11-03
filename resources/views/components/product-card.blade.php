<div class="group relative bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden {{ $class ?? '' }}" style="height: 100%; display: flex; flex-direction: column;">
    <!-- Product Image with Overlay -->
    <a href="{{ route('products.show', $product->id) }}" class="relative overflow-hidden block">
        <div class="aspect-w-16 aspect-h-12 bg-gray-200 dark:bg-gray-700">
            <img src="{{ $product->image_path ? asset($product->image_path) : asset('images/image.png') }}" 
                 class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" 
                 alt="{{ $product->name }}">
        </div>
        <!-- Stock Badge -->
        @if($product->stock > 0)
            <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                In Stock
            </span>
        @else
            <span class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                Out of Stock
            </span>
        @endif
        
        <!-- Quick View Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-semibold">
                View Details →
            </span>
        </div>
    </a>
    
    <!-- Product Info -->
    <div class="p-5 flex flex-col flex-grow">
        <!-- Product Name -->
        <a href="{{ route('products.show', $product->id) }}" class="block">
            <h5 class="text-lg font-bold text-gray-900 dark:text-white mb-2 line-clamp-2 hover:text-blue-600 transition-colors">
                {{ $product->name }}
            </h5>
        </a>
        
        <!-- Product Description -->
        <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow line-clamp-3">
            {{ Str::limit($product->description, 100) }}
        </p>
        
        <!-- Price and Stock Info -->
        <div class="mb-4">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-2xl font-bold text-gray-900 dark:text-white">
                        ${{ number_format($product->price, 2) }}
                    </span>
                    @if($product->stock <= 10 && $product->stock > 0)
                        <p class="text-xs text-orange-600 dark:text-orange-400 mt-1">
                            Only {{ $product->stock }} left!
                        </p>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Add to Cart Button -->
        <form method="POST" action="{{ route('cart.add') }}" class="mt-auto">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="quantity" value="1">
            <button 
                type="submit" 
                @if($product->stock <= 0) disabled @endif
                class="w-full flex items-center justify-center gap-2 px-6 py-3 
                       {{ $product->stock > 0 
                          ? 'bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white shadow-lg hover:shadow-xl transform hover:scale-105' 
                          : 'bg-gray-300 text-gray-500 cursor-not-allowed' }}
                       rounded-lg font-bold text-sm transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <span>{{ $product->stock > 0 ? 'Add to Cart' : 'Out of Stock' }}</span>
            </button>
        </form>
    </div>
</div>
