{{-- --}}


@extends('layouts.base')

@section('content')

<div class="content-container">

    <div class="items-container">

        <div class="items-top-container">
            <p class="items-title t1 do">City Bar</p>
            <p class="dg">25 articles</p>
            {{-- <a class="items-top-button dg" href="#">Ajouter un article</a> --}}
        </div>

        <div class="items-categories-container">
            
            <div class="items-categories-wrapper">

                <div class="items-categorie-container active">
                    <p class="items-categorie-text">Tout</p>
                </div>
                
                <div class="items-categorie-container">
                    <svg class="items-categorie-icon icon">
                        <use xlink:href="{{ asset('svg/icons.svg#entrées') }}"></use>
                    </svg>
                    <p class="items-categorie-text">Entrées</p>
                </div>

                <div class="items-categorie-container">
                    <svg class="items-categorie-icon icon">
                        <use xlink:href="{{ asset('svg/icons.svg#plats') }}"></use>
                    </svg>
                    <p class="items-categorie-text">Plats</p>
                </div>

                <div class="items-categorie-container active">
                    <svg class="items-categorie-icon icon">
                        <use xlink:href="{{ asset('svg/icons.svg#desserts') }}"></use>
                    </svg>
                    <p class="items-categorie-text">Desserts</p>
                </div>

            </div>

        </div>

        <div class="articles-container third">

            <div class="article-container">
                <div class="article-image-container product">
                    <img src="{{ asset('img/meals/meal1.jpg') }}" alt="">
                    <a href="#" class="article-edit-image-container">
                        <svg class="icon">
                            <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                        </svg>
                    </a>
                </div>
                <div class="article-informations-container">
                    <p class="article-title">Salade César</p>
                    <p class="article-subtitle stl">2500 CFA</p>
                </div>
            </div>


        </div>

    </div>
    
</div>

@endsection

