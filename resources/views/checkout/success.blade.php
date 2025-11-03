<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Success Icon -->
                    <div class="flex justify-center mb-6">
                        <div class="rounded-full bg-green-100 p-6">
                            <svg class="w-16 h-16 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Success Message -->
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-black mb-4">Order Placed Successfully!</h1>
                        <p class="text-lg text-black mb-6">Thank you for your order. Your order has been received and is being processed.</p>
                        
                        @if(isset($order))
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6 mb-6">
                            <h2 class="text-xl font-semibold text-black mb-4">Order Details</h2>
                            <div class="space-y-2 text-left">
                                <div class="flex justify-between">
                                    <span class="text-black font-medium">Order ID:</span>
                                    <span class="text-black">#{{ $order->id }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-black font-medium">Total Amount:</span>
                                    <span class="text-black font-bold text-xl">${{ number_format($order->total_amount, 2) }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-black font-medium">Status:</span>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">{{ ucfirst($order->status) }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-black font-medium">Order Date:</span>
                                    <span class="text-black">{{ $order->created_at->format('M d, Y - H:i') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 rounded-lg p-4 mb-6">
                            <p class="text-sm text-black">
                                <strong>What's next?</strong><br>
                                You will receive a confirmation email shortly with your order details.
                                You can track your order status from your dashboard.
                            </p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-semibold">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                Continue Shopping
                            </a>
                            <a href="{{ route('products') }}" class="inline-flex items-center justify-center px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-700 font-semibold">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                                Browse Products
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
