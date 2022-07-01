@extends('layouts.base')

@section('content')

    <div class="access-container">

        <div>
            <div class="access-part">
                <p class="t2 access-title">Connexion</p>
                <p class="access-text stl">Identifiez-vous pour accéder à votre restaurant, que vous soyez gérant, serveur ou cuisinier.</p>
    
                <form action="" class="access-form">
                    <input type="email" class="basic-input" placeholder="Email">
                    <input type="password" class="basic-input" placeholder="Mot de passe">
                    <a class="access-form-small-link st" href="#">Mot de passe oublié ?</a>
    
                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="Connexion">
                        <p class="access-button-ou st">ou</p>
                        <a href="" class="basic-button button--light">S'enregistrer</a>
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
