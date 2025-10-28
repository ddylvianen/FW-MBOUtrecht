<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="md:flex">
                        <div class="md:w-1/2">
                            <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-auto rounded-lg shadow-md">
                        </div>
                        <div class="md:w-1/2 md:pl-8">
                            <h1 class="text-3xl font-bold mb-4">{{ $item->name }}</h1>
                            <p class="mb-4">{{ $item->description }}</p>
                            <h3 class="text-2xl font-bold mb-4">${{ number_format($item->price, 2) }}</h3>
                            <form action="{{ route('cart.add', $item->id) }}" method="POST">
                                @csrf
                                <x-primary-button>
                                    {{ __('Add to Cart') }}
                                </x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
