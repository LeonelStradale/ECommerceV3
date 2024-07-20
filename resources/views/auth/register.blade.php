<x-guest-layout>
    <x-authentication-section>

        <x-logo></x-logo>

        <x-authentication-card width="sm:max-w-4xl">

            <x-validation-errors class="mb-4" />

            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                {{ __('Sign in to your account') }}
                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                    {{ __('Already registered?') }}
                    <a href="{{ route('login') }}"
                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-offset-gray-800">
                        {{ __('Log in') }}
                    </a>
                </p>
            </h1>

            <form class="space-y-6" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <x-label for="name">
                            <i class="fa-solid fa-user mr-1"></i>
                            {{ __('Name') }}
                        </x-label>
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus placeholder="Full name" autocomplete="name" />
                    </div>

                    <div>
                        <x-label for="email">
                            <i class="fa-solid fa-envelope mr-1"></i>
                            {{ __('Email') }}
                        </x-label>
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required placeholder="name@company.com" autocomplete="username" />
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <x-label for="password">
                            <i class="fa-solid fa-lock mr-1"></i>
                            {{ __('Password') }}
                        </x-label>
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            placeholder="••••••••" autocomplete="new-password" />
                    </div>

                    <div>
                        <x-label for="password_confirmation">
                            <i class="fa-solid fa-lock mr-1"></i>
                            {{ __('Confirm Password') }}
                        </x-label>
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required placeholder="••••••••" autocomplete="new-password" />
                    </div>
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <x-button class="w-full flex justify-center items-center">
                    <i class="fa-solid fa-right-to-bracket mr-2"></i>
                    {{ __('Register') }}
                </x-button>
            </form>

            <x-horizontal-divider></x-horizontal-divider>

            <x-google-button></x-google-button>

        </x-authentication-card>
    </x-authentication-section>
</x-guest-layout>
