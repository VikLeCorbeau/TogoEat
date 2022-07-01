{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

             <!-- Surname -->
            <div>
                <x-label for="surname" :value="__('Surname')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
            </div>
        
             <!-- Role -->
             <div>
                <x-label for="Role" :value="__('Role')" />

                <select id="Role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required autofocus >

                    <option>Gerant</option>
                    <option>Serveur</option>
                    <option>Cuisinier</option>

                </select>

            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
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
                <p class="t2 access-title">Enregistrer un nouvel employé</p>
                <p class="access-text stl">1dministrer votre restaurant et vos employés quand vous le souhaitez.</p>

                <div class="access-errors-container">
                    <x-auth-validation-errors class="access-error" :errors="$errors" />
                </div>
    
                <form method="POST" action="{{ route('register') }}" class="access-form">
                    @csrf

                    <!-- Name -->
                    <input id="name" class="basic-input" type="text" name="name" :value="old('name')" required autofocus placeholder="Nom" />

                    <!-- Surname -->
                    <input id="surname" class="basic-input" type="text" name="surname" :value="old('surname')" required autofocus placeholder="Prénom"/>
                
                    <!-- Role -->
                    <div class="basic-select">
                        <select id="Role" type="text" name="role" :value="old('role')" required autofocus >
                            <option value="0">Selectionnez un rôle</option>
                            <option>Gerant</option>
                            <option>Serveur</option>
                            <option>Cuisinier</option>
                        </select>

                    </div>

                    <!-- Email Address -->
                    <input id="email" class="basic-input" type="email" name="email" :value="old('email')" placeholder="Email" required />

                    <!-- Password -->

                    <input id="password" class="basic-input"
                                    type="password"
                                    name="password"
                                    placeholder="Mot de passe"
                                    required autocomplete="new-password" />

                    <!-- Confirm Password -->

                    <input id="password_confirmation" class="basic-input"
                                    type="password"
                                    name="password_confirmation" 
                                    placeholder="Confirmation mot de passe" required />



                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="S'enregistrer">
                        @if (Route::has('login'))
                            <p class="access-button-ou st">ou</p>
                            <a href="{{ route('login') }}" class="basic-button button--light">Connexion</a>
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


