<x-app-layout>
    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-white">
                    {{ __('Create Account') }}
                </h2>
                <p class="mt-2 text-center text-sm text-white">
                    {{ __('Join us today') }}
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-bold text-white">
                        {{ __('Full Name') }}
                    </label>
                    <input id="name" 
                           name="name" 
                           type="text" 
                           value="{{ old('name') }}"
                           required 
                           autofocus 
                           autocomplete="name"
                           class="mt-1 block w-full px-4 py-3 bg-white text-gray-900 border-2 border-gray-400 rounded-lg shadow-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-150 ease-in-out">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-bold text-white">
                        {{ __('Email Address') }}
                    </label>
                    <input id="email" 
                           name="email" 
                           type="email" 
                           value="{{ old('email') }}"
                           required 
                           autocomplete="username"
                           class="mt-1 block w-full px-4 py-3 bg-white text-gray-900 border-2 border-gray-400 rounded-lg shadow-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-150 ease-in-out">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-bold text-white">
                        {{ __('Password') }}
                    </label>
                    <input id="password" 
                           name="password" 
                           type="password" 
                           required 
                           autocomplete="new-password"
                           class="mt-1 block w-full px-4 py-3 bg-white text-gray-900 border-2 border-gray-400 rounded-lg shadow-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-150 ease-in-out">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-bold text-white">
                        {{ __('Confirm Password') }}
                    </label>
                    <input id="password_confirmation" 
                           name="password_confirmation" 
                           type="password" 
                           required 
                           autocomplete="new-password"
                           class="mt-1 block w-full px-4 py-3 bg-white text-gray-900 border-2 border-gray-400 rounded-lg shadow-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-150 ease-in-out">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div>
                    <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-base font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        {{ __('Create Account') }}
                    </button>
                </div>

                                <!-- Login Link -->
                <div class="text-center">
                    <span class="text-sm font-medium text-white">
                        {{ __('Already have an account?') }}
                    </span>
                    <a href="{{ route('login') }}" class="font-bold text-blue-400 hover:text-blue-300 underline ml-1">
                        {{ __('Sign in') }}
                    </a>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
