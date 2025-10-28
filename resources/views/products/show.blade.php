<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="md:flex md:space-x-8">
                        <!-- Product Image -->
                        <div class="md:w-1/2">
                            <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="w-full h-auto object-cover rounded-lg shadow-lg">
                        </div>

                        <!-- Product Details -->
                        <div class="md:w-1/2 mt-6 md:mt-0">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-100">{{ $product->name }}</h1>
                            
                            <div class="mt-3">
                                <p class="text-3xl text-gray-900 dark:text-gray-100">${{ number_format($product->price, 2) }}</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Price includes tax</p>
                            </div>

                            <div class="mt-6">
                                <p class="text-base text-gray-700 dark:text-gray-300">{{ $product->description }}</p>
                            </div>

                            <div class="mt-6">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                    {{ $product->stock }} in stock
                                </span>
                            </div>

                            <div class="mt-8 flex gap-4">
                                <x-primary-button>
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                    </svg>
                                    Add to Cart
                                </x-primary-button>
                                <x-secondary-button>
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    Wishlist
                                </x-secondary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
