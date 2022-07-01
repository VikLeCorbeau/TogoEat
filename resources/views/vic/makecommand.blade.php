@extends('layouts.order')

@section('articles')

    <div class="content-container command-grid-container">

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

            <div class="articles-container second">

                <div class="article-container">
                    <div class="article-image-container product">
                        <img src="{{ asset('img/meals/meal1.jpg') }}" alt="">
                        <a href="#">
                            <svg class="icon command-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#add') }}"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="article-informations-container">
                        <p class="article-title">Salade César</p>
                        <p class="article-subtitle stl">2500 CFA</p>
                    </div>
                </div>

                <div class="article-container">
                    <div class="article-image-container product">
                        <img src="{{ asset('img/meals/meal2.jpg') }}" alt="">
                        <a href="#">
                            <svg class="icon command-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#add') }}"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="article-informations-container">
                        <p class="article-title">Salade César</p>
                        <p class="article-subtitle stl">2500 CFA</p>
                    </div>
                </div>

                <div class="article-container">
                    <div class="article-image-container product">
                        <img src="{{ asset('img/meals/meal3.jpg') }}" alt="">
                        <a href="#">
                            <svg class="icon command-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#add') }}"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="article-informations-container">
                        <p class="article-title">Salade César</p>
                        <p class="article-subtitle stl">2500 CFA</p>
                    </div>
                </div>

                <div class="article-container">
                    <div class="article-image-container product">
                        <img src="{{ asset('img/meals/meal4.jpg') }}" alt="">
                        <a href="#">
                            <svg class="icon command-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#add') }}"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="article-informations-container">
                        <p class="article-title">Salade César</p>
                        <p class="article-subtitle stl">2500 CFA</p>
                    </div>
                </div>


                <div class="article-container">
                    <div class="article-image-container product">
                        <img src="{{ asset('img/meals/meal5.jpg') }}" alt="">
                        <a href="#">
                            <svg class="icon command-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#add') }}"></use>
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

@section('order')

    <div class="command-wrapper">

        <div class="command-inner">

            <div class="top-command-container">
                <div class="top-command-wrapper">
                    <p class="t1">Commande</p>
                    <p class="top-command-subtitle">3 articles</p>
                </div>
            </div>
    
            <div class="command-articles-container">
    
                <div class="article-container article-command">
                    <div class="article-image-container product">
                        <img src="{{ asset('img/meals/meal2.jpg') }}" alt="">
                    </div>
                    <div class="article-informations-container">
                        <p class="article-title">Salade César</p>
                        <p class="command-article-subtitle stl">2500 CFA</p>
                        <div class="command-article-qty-container">
                            <p class="command-article-button">-</p>
                            <p class="command-article-quantity">1</p>
                            <p class="command-article-button">+</p>
                        </div>
                    </div>
                </div>
    
            </div>
    
            <div class="command-buttons-container">
                <button class="basic-button button--orange button-command">Valider</button>
            </div>

        </div>

    </div>


@endsection


