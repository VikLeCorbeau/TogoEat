{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout> --}}


@extends('layouts.base')

@section('content')

    <div class="access-container">

        <div>
            <div class="access-part">
                <p class="t2 access-title">Connexion</p>
                <p class="access-text stl">Identifiez-vous pour accéder à votre restaurant, que vous soyez gérant, serveur ou cuisinier.</p>


                @if (session('status') == 'verification-link-sent')
                    <div class="access-success-container">
                        <p class="access-success">
                            Un nouveau lien de vérification vous a été envoyé par mail.
                        </p>
                    </div>
                @endif
    
                <form method="POST" action="{{ route('verification.send') }}" class="access-form">
                    @csrf

                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="Renvoyer le mail de vérification">
                    </div>

                </form>

                <form method="POST" action="{{ route('logout') }}" class="access-form">
                    @csrf

                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="Se déconnecter">
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


