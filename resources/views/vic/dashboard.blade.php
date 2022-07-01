@extends('layouts.base')

@section('content')

<div class="content-container">

    <div class="dashboard-container">

        <div>
            <div class="dashboard-part-container">

                <div class="items-top-container">
                    <p class="items-title t1 do">City Bar</p>
                    <a class="dg" href="#">Modifier les informations</a>
                </div>
    
                <div class="balance-container">
    
                    <div class="balance-data-container">
    
                        <div class="balance-data-wrapper">
                            <p class="balance-result do t1">
                                + 120 000 CFA
                            </p>
                            <p class="do">Balance</p>
                        </div>
                        <svg class="illustration balance-illustration">
                            <use xlink:href="{{ asset('svg/illustrations.svg#balance') }}"></use>
                        </svg>
    
                    </div>
    
                    <div class="balance-buttons-container">
                        <a class="action-container" href="#">
                            <div class="action-icon-container">
                                <svg class="icon icon-action">
                                    <use xlink:href="{{ asset('svg/icons.svg#voir_depenses') }}"></use>
                                </svg>
                            </div>
                            <p class="action-text">Voir les dépenses (10)</p>
                        </a>
    
                        <a class="action-container" href="#">
                            <div class="action-icon-container">
                                <svg class="icon icon-action">
                                    <use xlink:href="{{ asset('svg/icons.svg#voir_recettes') }}"></use>
                                </svg>
                            </div>
                            <p class="action-text">Voir les recettes (15)</p>
                        </a>
                    </div>
    
    
                </div>
        
            </div>
            
            <div class="dashboard-part-container">
    
                <div class="items-top-container">
                    <p class="items-title t1 do">La carte</p>
                    <a class="dg" href="#">Editer la carte</a>
                </div>
    
    
                <div class="dashboard-menus-container">
    
                    <div class="dashboard-menu-container">
                        <div class="dashboard-wrapper-container">
                            <svg class="icon dashboard-menu-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#entrées') }}"></use>
                            </svg>
                            <p class="dashboard-menu-title"><span>3</span> Entrées</p>
                        </div>
                    </div>
    
                    <div class="dashboard-menu-container">
                        <div class="dashboard-wrapper-container">
                            <svg class="icon dashboard-menu-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#plats') }}"></use>
                            </svg>
                            <p class="dashboard-menu-title"><span>10</span> Plats</p>
                        </div>
                    </div>
    
                    <div class="dashboard-menu-container">
                        <div class="dashboard-wrapper-container">
                            <svg class="icon dashboard-menu-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#desserts') }}"></use>
                            </svg>
                            <p class="dashboard-menu-title"><span>5</span> Desserts</p>
                        </div>
                    </div>
    
                    <div class="dashboard-menu-container">
                        <div class="dashboard-wrapper-container">
                            <svg class="icon dashboard-menu-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#menus') }}"></use>
                            </svg>
                            <p class="dashboard-menu-title"><span>2</span> Menus</p>
                        </div>
                    </div>
    
                    <div class="dashboard-menu-container">
                        <div class="dashboard-wrapper-container">
                            <svg class="icon dashboard-menu-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#soft') }}"></use>
                            </svg>
                            <p class="dashboard-menu-title"><span>5</span> Softs</p>
                        </div>
                    </div>
    
                    <div class="dashboard-menu-container">
                        <div class="dashboard-wrapper-container">
                            <svg class="icon dashboard-menu-icon">
                                <use xlink:href="{{ asset('svg/icons.svg#alcool') }}"></use>
                            </svg>
                            <p class="dashboard-menu-title"><span>3</span> Alcool</p>
                        </div>
                    </div>
    
                </div>
    
        
            </div>
        </div>


        <div>
            <div class="dashboard-part-container">

                <div class="items-top-container">
                    <p class="items-title t1 do">Employés (<span>4</span>)</p>
                    <a class="dg" href="#">Ajouter un employé</a>
                </div>
    
                <div class="dashboard-employees-container">
    
                    <div class="dashboard-employee-container">
    
                        <div class="dashboard-employee-image-container">
                            <img src="{{ asset('img/profil/profil2.jpg') }}" alt="">
                            <a href="#">
                                <svg class="icon dashboard-employee-icon">
                                    <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                                </svg>
                            </a>
                        </div>
    
                        <div class="dashboard-employee-informations-container">
                            <p>Michel Bay</p>
                            <p class="st lo">Cusinier</p>
                        </div>
    
                    </div>
    
                </div>
    
            </div>
        </div>


    </div>

</div>
@endsection
