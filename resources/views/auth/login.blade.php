<x-app-layout>
    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-black">
                    {{ __('Welcome Back') }}
                </h2>
                <p class="mt-2 text-center text-sm text-black">
                    {{ __('Sign in to your account') }}
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-bold text-black">
                        {{ __('Email Address') }}
                    </label>
                    <input id="email" 
                           name="email" 
                           type="email" 
                           value="{{ old('email') }}"
                           required 
                           autofocus 
                           autocomplete="username"
                           class="mt-1 block w-full px-4 py-3 bg-white text-gray-900 border-2 border-gray-400 rounded-lg shadow-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-150 ease-in-out">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-bold text-black">
                        {{ __('Password') }}
                    </label>
                    <input id="password" 
                           name="password" 
                           type="password" 
                           required 
                           autocomplete="current-password"
                           class="mt-1 block w-full px-4 py-3 bg-white text-gray-900 border-2 border-gray-400 rounded-lg shadow-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-150 ease-in-out">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-400 text-blue-600 shadow-sm focus:ring-blue-600">
                        <span class="ml-2 text-sm font-bold text-black">{{ __('Remember me') }}</span>
                    </label>

                    <div class="text-sm">
                        <a href="{{ route('password.request') }}" class="font-bold text-blue-400 hover:text-blue-300 underline">
                            {{ __('Forgot password?') }}
                        </a>
                    </div>
                </div>            <div>
                <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-base font-bold text-black bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                    {{ __('Sign in') }}
                </button>
            </div>

            <div class="text-center">
                <span class="text-sm font-medium text-black">
                    {{ __("Don't have an account?") }}
                </span>
                <a href="{{ route('register') }}" class="font-bold text-blue-700 hover:text-blue-800 underline ml-1">
                    {{ __('Register now') }}
                </a>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>