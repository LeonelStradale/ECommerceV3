<x-guest-layout>
    <x-authentication-section>

        <x-logo></x-logo>

        <x-authentication-card>

            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                {{ __('Forgot your password?') }}
            </h1>

            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ $value }}
                </div>
            @endsession

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block">
                    <x-label for="email">
                        <i class="fa-solid fa-envelope mr-1"></i>
                        {{ __('Email') }}
                    </x-label>
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus placeholder="name@company.com" autocomplete="username" />
                </div>


                <x-button class="w-full mt-8 flex justify-center items-center">
                    <i class="fa-solid fa-paper-plane mr-2"></i>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </form>

        </x-authentication-card>
    </x-authentication-section>
</x-guest-layout>
