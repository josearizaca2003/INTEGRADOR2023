<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="Apellido" value="{{ __('Apellido') }}" />
                <x-input id="Apellido" class="block mt-1 w-full" type="text" name="Apellido" :value="old('Apellido')" required autofocus autocomplete="Apellido" />
            </div>

            <div>
                <x-label for="FechaNacimiento" value="{{ __('FechaNacimiento') }}" />
                <x-input id="FechaNacimiento" class="block mt-1 w-full" type="date" name="FechaNacimiento" :value="old('FechaNacimiento')" required autofocus autocomplete="FechaNacimiento" />
            </div>

            <div>
                <x-label for="DNI" value="{{ __('DNI') }}" />
                <x-input id="DNI" class="block mt-1 w-full" type="text" name="DNI" :value="old('DNI')" required autofocus autocomplete="DNI" />
            </div>

            <div>
                <x-label for="EstadoCivil" value="{{ __('EstadoCivil') }}" />
                <x-input id="EstadoCivil" class="block mt-1 w-full" type="text" name="EstadoCivil" :value="old('EstadoCivil')" required autofocus autocomplete="EstadoCivil" />
            </div>

            <div>
                <x-label for="Rol" value="{{ __('Rol') }}" />
                <x-input id="Rol" class="block mt-1 w-full" type="text" name="Rol" :value="old('Rol')" required autofocus autocomplete="Rol" />
            </div>

            <div>
                <x-label for="Celular" value="{{ __('Celular') }}" />
                <x-input id="Celular" class="block mt-1 w-full" type="text" name="Celular" :value="old('Celular')" required autofocus autocomplete="Celular" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
