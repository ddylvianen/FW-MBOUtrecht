<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-navy-900 via-navy-800 to-navy-900 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Profile Header -->
            <div class="bg-white dark:bg-navy-800 overflow-hidden shadow-xl rounded-2xl">
                <div class="p-8 border-b border-gray-200 dark:border-navy-700">
                    <h2 class="text-3xl font-bold text-navy-900 dark:text-white">
                        {{ __('My Account') }}
                    </h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        {{ __('Manage your profile and view your orders') }}
                    </p>
                </div>
            </div>

            <!-- Profile Information -->
            <div class="bg-white dark:bg-navy-800 overflow-hidden shadow-xl rounded-2xl">
                <div class="p-8">
                    <h3 class="text-xl font-semibold text-navy-900 dark:text-white mb-6">
                        {{ __('Profile Information') }}
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('Name') }}
                            </label>
                            <p class="text-lg text-navy-900 dark:text-white">{{ Auth::user()->name }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('Email') }}
                            </label>
                            <p class="text-lg text-navy-900 dark:text-white">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('profile.edit') }}" 
                           class="inline-flex items-center px-6 py-3 bg-navy-600 hover:bg-navy-700 text-white font-semibold rounded-lg shadow-lg transition duration-150 ease-in-out">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            {{ __('Edit Profile') }}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Orders Section -->
            <div class="bg-white dark:bg-navy-800 overflow-hidden shadow-xl rounded-2xl">
                <div class="p-8">
                    <h3 class="text-xl font-semibold text-navy-900 dark:text-white mb-6">
                        {{ __('Recent Orders') }}
                    </h3>
                    <div class="text-center py-12">
                        <svg class="mx-auto h-16 w-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">
                            {{ __('You have no orders yet.') }}
                        </p>
                        <div class="mt-6">
                            <a href="{{ route('products') }}" 
                               class="inline-flex items-center px-6 py-3 bg-navy-600 hover:bg-navy-700 text-white font-semibold rounded-lg shadow-lg transition duration-150 ease-in-out">
                                {{ __('Browse Products') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white dark:bg-navy-800 overflow-hidden shadow-xl rounded-2xl">
                <div class="p-8">
                    <h3 class="text-xl font-semibold text-navy-900 dark:text-white mb-6">
                        {{ __('Quick Actions') }}
                    </h3>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('cart') }}" 
                           class="inline-flex items-center px-6 py-3 bg-gray-100 dark:bg-navy-700 hover:bg-gray-200 dark:hover:bg-navy-600 text-navy-900 dark:text-white font-semibold rounded-lg shadow-md transition duration-150 ease-in-out">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            {{ __('View Cart') }}
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" 
                                    class="inline-flex items-center px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg shadow-md transition duration-150 ease-in-out">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                {{ __('Logout') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
