{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



@extends('layouts.base')

@section('content')

    <div class="access-container">

        <div>
            <div class="access-part">
                <p class="t2 access-title">Confirmation du mot de passe</p>
                <p class="access-text stl">Ceci est une zone sécurisée du site. Veuilez confirmer votre mot de passe avant de continuer.</p>

                <div class="access-errors-container">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="access-error" :errors="$errors" />
                </div>

    
                <form method="POST" action="{{ route('password.confirm') }} class="access-form">
                    @csrf

                    <input  id="password" class="basic-input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="Confimer">
                    </div>

                </form>
            </div>
        </div>

        <div class="access-right-part">
            <div class="access-svg-container">
                <svg class="illustration">
                    <use xlink:href="{{ asset('svg/illustrations.svg#connexion') }}"></use>
                </svg>
            </div>
        </div>


    </div>

@endsection