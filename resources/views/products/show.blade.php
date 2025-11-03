<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="md:flex md:space-x-8">
                        <!-- Product Image -->
                        <div class="md:w-1/2">
                            <img src="{{ $product->image_path ? asset($product->image_path) : asset('images/image.png') }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-auto object-cover rounded-lg shadow-lg">
                        </div>

                        <!-- Product Details -->
                        <div class="md:w-1/2 mt-6 md:mt-0">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-100 text-black">{{ $product->name }}</h1>
                            
                            <!-- Categories -->
                            @if($product->categories && $product->categories->count() > 0)
                            <div class="mt-3 flex flex-wrap gap-2">
                                @foreach($product->categories as $category)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </div>
                            @endif
                            
                            <div class="mt-4">
                                <p class="text-3xl text-gray-900 dark:text-gray-100 text-black">${{ number_format($product->price, 2) }}</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Price includes tax</p>
                            </div>

                            <div class="mt-6">
                                <h3 class="text-lg font-semibold text-black mb-2">Description</h3>
                                <p class="text-base text-gray-700 dark:text-gray-300 text-black">{{ $product->description }}</p>
                            </div>

                            <div class="mt-6">
                                @if($product->stock > 0)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                        {{ $product->stock }} in stock
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                                        Out of Stock
                                    </span>
                                @endif
                            </div>

                            <div class="mt-8 flex gap-4">
                                <form method="POST" action="{{ route('cart.add') }}" class="flex items-center gap-2">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <label for="quantity" class="sr-only">Quantity</label>
                                    <input id="quantity" name="quantity" type="number" min="1" value="1" class="w-20 px-2 py-1 border rounded">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors">
                                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                        Add to Cart
                                    </button>
                                </form>
                                
                                <form method="POST" action="{{ route('wishlist.add') }}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition-colors">
                                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        Wishlist
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
