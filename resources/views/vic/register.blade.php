@extends('layouts.base')

@section('content')

    <div class="access-container">

        <div>
            <div class="access-part">
                <p class="t2 access-title">Créer un compte</p>
                <p class="access-text stl">Enregistrez-vous pour administrer votre restaurant.</p>
    
                <form action="" class="access-form">
                    <input type="email" class="basic-input" placeholder="Email">
                    <input type="password" class="basic-input" placeholder="Mot de passe">
                    <input type="text" class="basic-input" placeholder="Prénom">
                    <input type="text" class="basic-input" placeholder="Nom">
    
                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="Créer un compte">
                        <p class="access-button-ou st">ou</p>
                        <a href="" class="basic-button button--light">J'ai un compte</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="access-right-part">
            <div class="access-svg-container">
                <svg class="illustration">
                    <use xlink:href="{{ asset('svg/illustrations.svg#register') }}"></use>
                </svg>
            </div>
        </div>


    </div>

@endsection
