@extends('layouts.base')

@section('content')

<div class="content-container">

    <div class="items-container">

        <div class="items-top-container">
            <p class="items-title t1 do">Dépenses et Recettes</p>
            <a class="items-top-button dg" href="#">Ajouter une dépense</a>
        </div>

        <div class="articles-container third">

            <div class="small-article-container small-article-command ">
                <div class="small-article-wrapper">
                    <a  class="small-article-edit-icon-container">
                        <svg class="icon icon-edit-command">
                            <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                        </svg>
                    </a>

                    <p class="small-article-title t2">Table 1</p>
                    <p class="small-article-subtitle lo">13/06/2002</p>

                    <div class="small-article-top-information-container">
                        <p class="small-article-top-information dg">3 Articles</p>
                        <p class="small-article-top-information dg">6000 CFA</p>
                    </div>

                    <div class="small-article-informations-container">
                        <p class="small-article-information">2 x Brochettes de poulet</p>
                        <p class="small-article-information">1 x Riz pimenté</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>



@endsection


@include('partials/changeState')
@include('partials/editCommand')