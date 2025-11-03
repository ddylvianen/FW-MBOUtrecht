<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="mb-6 text-2xl font-semibold text-black">Your Cart</h1>

                    @if(session('success'))
                        <div class="alert alert-success mb-4 p-4 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger mb-4 p-4 bg-red-100 text-red-800 rounded">{{ session('error') }}</div>
                    @endif

                    @if($cart && $cart->products->count())
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Product</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Price</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Quantity</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Subtotal</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @php $total = 0; @endphp
                                    @foreach($cart->products as $item)
                                        @php $subtotal = $item->price * $item->quantity; $total += $subtotal; @endphp
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <img src="{{ ($item->product && $item->product->image_path) ? asset($item->product->image_path) : asset('images/image.png') }}" 
                                                         alt="" 
                                                         class="w-16 h-16 object-cover rounded mr-4">
                                                    <div>
                                                        <div class="text-sm font-medium text-black">{{ $item->product->name ?? 'Deleted product' }}</div>
                                                        <div class="text-sm text-gray-500">{{ Str::limit($item->product->description ?? '', 50) }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-black">${{ number_format($item->price,2) }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <form method="POST" action="{{ route('cart.update') }}" class="flex items-center gap-2">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="w-20 px-2 py-1 border rounded text-black">
                                                    <button class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">Update</button>
                                                </form>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">${{ number_format($subtotal,2) }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <form method="POST" action="{{ route('cart.remove') }}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Remove</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6 flex justify-end">
                            <div class="text-right">
                                <p class="mb-2 text-lg text-black">Total: <strong class="text-xl">${{ number_format($total,2) }}</strong></p>
                                <form method="POST" action="{{ route('orders.store') }}">
                                    @csrf
                                    <button class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 font-semibold">Proceed to Checkout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-8">
                            <p class="text-lg text-black mb-4">Your cart is empty.</p>
                            <a href="{{ route('products') }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Continue Shopping</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
