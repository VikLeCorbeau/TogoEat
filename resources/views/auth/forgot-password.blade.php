{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
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
                <p class="t2 access-title">Récupérez votre compte</p>
                <p class="access-text stl">Remplissez ce formulaire pour récupérer votre compte. Un email vous sera envoyé.</p>

                <div class="access-errors-container">
                    <!-- Session Status -->
                    <x-auth-session-status class="access-error" :status="session('status')" />
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="access-error" :errors="$errors" />
                </div>

                <form class="access-form" method="POST" action="{{ route('password.email') }}">
                    @csrf
        
                    <!-- Email Address -->
                    <input id="email" class="basic-input" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
        
                        
                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="Récupérer mon compte">
                        @if (Route::has('login'))
                            <p class="access-button-ou st">ou</p>
                            <a href="{{ route('login') }}"class="basic-button button--light">J'ai un compte</a>
                        @endif
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
