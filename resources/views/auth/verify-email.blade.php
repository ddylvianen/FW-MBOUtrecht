<x-app-layout>
    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-black">
                    {{ __('Verify Email Address') }}
                </h2>
                <p class="mt-4 text-center text-sm font-medium text-black">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="rounded-lg bg-green-50 p-4">
                    <p class="text-sm font-bold text-green-800">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </p>
                </div>
            @endif

            <div class="mt-8 space-y-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-base font-bold text-black bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border-2 border-gray-400 rounded-lg shadow-sm text-base font-bold text-gray-900 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition duration-150 ease-in-out">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
