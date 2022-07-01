{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>   

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
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
                <p class="t2 access-title">Connexion</p>
                <p class="access-text stl">Identifiez-vous pour accéder à votre restaurant, que vous soyez gérant, serveur ou cuisinier.</p>

                <div class="access-errors-container">
                    <!-- Session Status -->
                    <x-auth-session-status class="access-error" :status="session('status')" />
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="access-error" :errors="$errors" />
                </div>

    
                <form method="POST" action="{{ route('login') }}" class="access-form">
                    @csrf
                    <input class="basic-input" id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">

                    <input  id="password" class="basic-input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Mot de passe">

                    <!-- Remember Me -->
                    <div class="basic-checkbox">
                        <label for="remember_me" class="">
                            <input id="remember_me" type="checkbox" class="" name="remember">
                            <span class="">Se souvenir de moi</span>
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="access-form-small-link st" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                    @endif
    
                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="Connexion">
                        {{-- @if (Route::has('register'))
                            <p class="access-button-ou st">ou</p>
                            <a href="{{ route('register') }}" class="basic-button button--light">S'enregistrer</a>
                        @endif --}}
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


