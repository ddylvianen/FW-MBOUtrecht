<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-black">
            {{ __('Mijn Wishlist') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('info'))
                <div class="mb-4 p-4 bg-blue-100 border border-blue-400 text-blue-700 rounded">
                    {{ session('info') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($wishlistItems->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($wishlistItems as $item)
                                <div class="border rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                                    <div class="relative">
                                        <img src="{{ $item->product->image_path ? asset($item->product->image_path) : asset('images/image.png') }}" 
                                             alt="{{ $item->product->name }}"
                                             class="w-full h-64 object-cover">
                                    </div>
                                    
                                    <div class="p-4">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $item->product->name }}</h3>
                                        <p class="text-gray-600 mb-3 line-clamp-2">{{ $item->product->description }}</p>
                                        
                                        <div class="flex items-center justify-between mb-4">
                                            <span class="text-2xl font-bold text-blue-600">€{{ number_format($item->product->price, 2) }}</span>
                                            @if($item->product->stock > 0)
                                                <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-200 rounded-full">
                                                    Op voorraad
                                                </span>
                                            @else
                                                <span class="px-2 py-1 text-xs font-semibold text-red-800 bg-red-200 rounded-full">
                                                    Niet op voorraad
                                                </span>
                                            @endif
                                        </div>

                                        <div class="flex gap-2">
                                            <a href="{{ route('products.show', $item->product->id) }}" 
                                               class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-2 px-4 rounded-lg font-semibold transition-colors duration-200">
                                                Bekijk Product
                                            </a>
                                            
                                            <form action="{{ route('wishlist.remove') }}" method="POST" class="flex-1">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item->product->id }}">
                                                <button type="submit" 
                                                        class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg font-semibold transition-colors duration-200">
                                                    Verwijder
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="mx-auto h-24 w-24 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <h3 class="text-xl font-semibold text-gray-700 mb-2">Je wishlist is leeg</h3>
                            <p class="text-gray-500 mb-6">Voeg producten toe aan je wishlist om ze later terug te vinden!</p>
                            <a href="{{ route('products') }}" 
                               class="inline-block bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-lg font-semibold transition-colors duration-200">
                                Shop Nu
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
