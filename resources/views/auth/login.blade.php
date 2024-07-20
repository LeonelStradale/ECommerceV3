<x-guest-layout>
    <x-authentication-section>

        <x-logo></x-logo>

        <x-authentication-card>

            <x-validation-errors class="mb-4" />

            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ $value }}
                </div>
            @endsession

            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                {{ __('Sign in to your account') }}
                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                    {{ __('Do not you have an account yet?') }}
                    <a href="{{ route('register') }}"
                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-offset-gray-800">
                        {{ __('Register') }}
                    </a>
                </p>
            </h1>

            <form class="space-y-5" method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email">
                        <i class="fa-solid fa-envelope mr-1"></i>
                        {{ __('Email') }}
                    </x-label>
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus placeholder="name@company.com" autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password">
                        <i class="fa-solid fa-lock mr-1"></i>
                        {{ __('Password') }}
                    </x-label>
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        placeholder="••••••••" autocomplete="current-password" />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <x-button class="w-full mt-4 flex justify-center items-center">
                    <i class="fa-solid fa-right-to-bracket mr-2"></i>
                    {{ __('Log in') }}
                </x-button>
            </form>

            <x-horizontal-divider></x-horizontal-divider>

            <x-google-button></x-google-button>

        </x-authentication-card>
    </x-authentication-section>
</x-guest-layout>
