@extends('layouts.base')

@section('content')

    <div class="access-container">

        <div>
            <div class="access-part">
                <p class="t2 access-title">Récupérez votre compte</p>
                <p class="access-text stl">Remplissez ce formulaire pour récupérer votre compte. Un email vous sera envoyé.</p>
    
                <form action="" class="access-form">
                    <input type="email" class="basic-input" placeholder="Email">
    
                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="Récupérer mon compte">
                        <p class="access-button-ou st">ou</p>
                        <a href="" class="basic-button button--light">J'ai un compte</a>
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
