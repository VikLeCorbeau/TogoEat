@extends('layouts.base')

@section('content')


<div class="content-container">

    <div class="items-container">

        <div class="items-top-container">
            <p class="items-title t1 do">Employés</p>
            <a class="items-top-button dg" href="#">Ajouter un employé</a>
        </div>

        <div class="items-categories-container">
            
            <div class="items-categories-wrapper">

                <div class="items-categorie-container active">
                    <p class="items-categorie-text">Tout (<span>4</span>)</p>
                </div>
                
                <div class="items-categorie-container">
                    <svg class="items-categorie-icon icon">
                        <use xlink:href="{{ asset('svg/icons.svg#cuisinier') }}"></use>
                    </svg>
                    <p class="items-categorie-text">Cusiniers</p>
                </div>

                <div class="items-categorie-container">
                    <svg class="items-categorie-icon icon">
                        <use xlink:href="{{ asset('svg/icons.svg#serveur') }}"></use>
                    </svg>
                    <p class="items-categorie-text">Serveurs</p>
                </div>

                <div class="items-categorie-container active">
                    <svg class="items-categorie-icon icon">
                        <use xlink:href="{{ asset('svg/icons.svg#gérant') }}"></use>
                    </svg>
                    <p class="items-categorie-text">Gérants</p>
                </div>

            </div>

        </div>

        <div class="articles-container sixth">

            <div class="article-container">
                <div class="article-image-container ratio-idem">
                    <img src="{{ asset('img/profil/profil2.jpg') }}" alt="">
                    <a href="#" class="article-edit-image-container">
                        <svg class="icon">
                            <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                        </svg>
                    </a>
                </div>
                <div class="article-informations-container center">
                    <p class="article-title">Michel Bay</p>
                    <p class="article-subtitle lo">Cusinier</p>
                </div>
            </div>

            <div class="article-container">
                <div class="article-image-container ratio-idem">
                    <img src="{{ asset('img/profil/profil2.jpg') }}" alt="">
                    <a href="#" class="article-edit-image-container">
                        <svg class="icon">
                            <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                        </svg>
                    </a>
                </div>
                <div class="article-informations-container center">
                    <p class="article-title">Michel Bay</p>
                    <p class="article-subtitle lo">Cusinier</p>
                </div>
            </div>

            <div class="article-container">
                <div class="article-image-container ratio-idem">
                    <img src="{{ asset('img/profil/profil2.jpg') }}" alt="">
                    <a href="#" class="article-edit-image-container">
                        <svg class="icon">
                            <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                        </svg>
                    </a>
                </div>
                <div class="article-informations-container center">
                    <p class="article-title">Michel Bay</p>
                    <p class="article-subtitle lo">Cusinier</p>
                </div>
            </div>

            <div class="article-container">
                <div class="article-image-container ratio-idem">
                    <img src="{{ asset('img/profil/profil2.jpg') }}" alt="">
                    <a href="#" class="article-edit-image-container">
                        <svg class="icon">
                            <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                        </svg>
                    </a>
                </div>
                <div class="article-informations-container center">
                    <p class="article-title">Michel Bay</p>
                    <p class="article-subtitle lo">Cusinier</p>
                </div>
            </div>

            <div class="article-container">
                <div class="article-image-container ratio-idem">
                    <img src="{{ asset('img/profil/profil2.jpg') }}" alt="">
                    <a href="#" class="article-edit-image-container">
                        <svg class="icon">
                            <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                        </svg>
                    </a>
                </div>
                <div class="article-informations-container center">
                    <p class="article-title">Michel Bay</p>
                    <p class="article-subtitle lo">Cusinier</p>
                </div>
            </div>

            <div class="article-container">
                <div class="article-image-container ratio-idem">
                    <img src="{{ asset('img/profil/profil2.jpg') }}" alt="">
                    <a href="#" class="article-edit-image-container">
                        <svg class="icon">
                            <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                        </svg>
                    </a>
                </div>
                <div class="article-informations-container center">
                    <p class="article-title">Michel Bay</p>
                    <p class="article-subtitle lo">Cusinier</p>
                </div>
            </div>

            <div class="article-container">
                <div class="article-image-container ratio-idem">
                    <img src="{{ asset('img/profil/profil2.jpg') }}" alt="">
                    <a href="#" class="article-edit-image-container">
                        <svg class="icon">
                            <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                        </svg>
                    </a>
                </div>
                <div class="article-informations-container center">
                    <p class="article-title">Michel Bay</p>
                    <p class="article-subtitle lo">Cusinier</p>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection
