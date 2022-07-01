{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
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
                <p class="t2 access-title">Réinitialisation du mot de passe</p>
                <p class="access-text stl">Veuillez compléter ce formulaire pour changer votre mot de passe.</p>

                <div class="access-errors-container">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="access-error" :errors="$errors" />
                </div>

    
                <form method="POST" action="{{ route('password.update') }}"class="access-form">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <input id="email" class="basic-input" type="email" name="email" :value="old('email', $request->email)" placeholder="Email" required autofocus />

                    <!-- Password -->
                    <input id="password" class="basic-input" type="password" name="password" placeholder="Mot de passe" required />

                    <!-- Confirm Password -->
                    <input id="password_confirmation" class="basic-input"
                            type="password"
                            name="password_confirmation" 
                            placeholder="Confirmer le mot de passe"
                            required />

                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="Réinitialiser mon mot de passe">
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


