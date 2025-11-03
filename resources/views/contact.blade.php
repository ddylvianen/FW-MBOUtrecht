<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
            <div>
                <h1 class="text-center text-3xl font-extrabold text-black mb-4">Contact Us</h1>
                <p class="text-center text-base font-medium text-black mb-6">If you have any questions or inquiries, please feel free to reach out to us!</p>
            </div>

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-bold text-black">
                        {{ __('Name') }}
                    </label>
                    <input id="name" 
                           name="name" 
                           type="text" 
                           required 
                           class="mt-1 block w-full px-4 py-3 bg-white text-gray-900 border-2 border-gray-400 rounded-lg shadow-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-150 ease-in-out">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-bold text-black">
                        {{ __('Email') }}
                    </label>
                    <input id="email" 
                           name="email" 
                           type="email" 
                           required 
                           class="mt-1 block w-full px-4 py-3 bg-white text-gray-900 border-2 border-gray-400 rounded-lg shadow-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-150 ease-in-out">
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-bold text-black">
                        {{ __('Message') }}
                    </label>
                    <textarea id="message" 
                              name="message" 
                              rows="5" 
                              required
                              class="mt-1 block w-full px-4 py-3 bg-white text-gray-900 border-2 border-gray-400 rounded-lg shadow-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-150 ease-in-out"></textarea>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-base font-bold text-black bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        {{ __('Send Message') }}
                    </button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>