@extends('layouts.base')

@section('content')

    <div class="access-container">

        <div>
            <div class="access-part">
                <p class="t2 access-title">Mes informations</p>
                <p class="access-text stl">Modifiez vos informations quand vous le souhaitez.</p>
    
                <form action="" class="access-form">
                    <input type="email" class="basic-input" placeholder="Email">
                    <input type="password" class="basic-input" placeholder="Mot de passe">
                    <input type="text" class="basic-input" placeholder="Prénom">
                    <input type="text" class="basic-input" placeholder="Nom">
    
                    <div class="access-buttons-container">
                        <input type="submit" class="basic-button button--dark" value="Modifier mes informations">
                    </div>
                </form>
            </div>
        </div>

        <div class="access-right-part">
            <div class="access-svg-container">
                <svg class="illustration">
                    <use xlink:href="{{ asset('svg/illustrations.svg#modifier_informations') }}"></use>
                </svg>
            </div>
        </div>


    </div>

@endsection
