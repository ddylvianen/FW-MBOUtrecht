<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Error Icon -->
                    <div class="flex justify-center mb-6">
                        <div class="rounded-full bg-red-100 p-6">
                            <svg class="w-16 h-16 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Error Message -->
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-black mb-4">Order Failed</h1>
                        <p class="text-lg text-black mb-6">
                            @if(session('error'))
                                {{ session('error') }}
                            @else
                                Unfortunately, we couldn't process your order. Please try again.
                            @endif
                        </p>

                        <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 rounded-lg p-4 mb-6">
                            <p class="text-sm text-black">
                                <strong>What happened?</strong><br>
                                {{ session('error_details', 'There was an issue processing your order. Your cart has been preserved and no charges were made.') }}
                            </p>
                        </div>

                        <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 rounded-lg p-4 mb-6">
                            <p class="text-sm text-black">
                                <strong>Need help?</strong><br>
                                If you continue to experience issues, please contact our support team or try again later.
                            </p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('cart') }}" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-semibold">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Back to Cart
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-700 font-semibold">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Contact Support
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
