<div class="menu-global left">

    <div class="menu-container left">

        <div class="menu-wrapper">
            <div class="menu-title t1 do">Menu</div>
    
            <div class="menu-actions-container">

                <a class="action-container" href="{{ route('home') }}">
                    <div class="action-icon-container">
                        <svg class="icon icon-action">
                            <use xlink:href="{{ asset('svg/icons.svg#voir_carte') }}"></use>
                        </svg>
                    </div>
                    <p class="action-text">Voir la carte</p>
                </a>
                
                {{-- Roles Admin, Gerant, Server, Cuisinier --}}
                @role([2, 3, 4, 5])
                    <a class="action-container" href="#">
                        <div class="action-icon-container">
                            <svg class="icon icon-action">
                                <use xlink:href="{{ asset('svg/icons.svg#voir_commande') }}"></use>
                            </svg>
                        </div>
                        <p class="action-text">Voir les commandes</p>
                    </a>
                @endrole

                {{-- Roles Admin, Gerant, Serveur --}}
                @role([2, 3, 4])
                    <a class="action-container" href="#">
                        <div class="action-icon-container">
                            <svg class="icon icon-action">
                                <use xlink:href="{{ asset('svg/icons.svg#prendre_commande') }}"></use>
                            </svg>
                        </div>
                        <p class="action-text">Prendre une commande</p>
                    </a>
                @endrole
    
                {{-- Roles Admin, Gerant --}}
                @role([2, 3])
                    <a class="action-container" href="{{ route('dashboard') }}">
                        <div class="action-icon-container">
                            <svg class="icon icon-action">
                                <use xlink:href="{{ asset('svg/icons.svg#dashboard') }}"></use>
                            </svg>
                        </div>
                        <p class="action-text">Dashboard</p>
                    </a>

                    <a class="action-container" href="{{ route('employees.show') }}">
                        <div class="action-icon-container">
                            <svg class="icon icon-action">
                                <use xlink:href="{{ asset('svg/icons.svg#voir_employés') }}"></use>
                            </svg>
                        </div>
                        <p class="action-text">Voir les employés</p>
                    </a>
        
        
                    <a class="action-container" href="#">
                        <div class="action-icon-container">
                            <svg class="icon icon-action">
                                <use xlink:href="{{ asset('svg/icons.svg#voir_depenses') }}"></use>
                            </svg>
                        </div>
                        <p class="action-text">Voir les dépenses</p>
                    </a>
    
        
                    <a class="action-container" href="#">
                        <div class="action-icon-container">
                            <svg class="icon icon-action">
                                <use xlink:href="{{ asset('svg/icons.svg#voir_recettes') }}"></use>
                            </svg>
                        </div>
                        <p class="action-text">Voir les recettes</p>
                    </a>

                @endrole
    
            </div>
    
        </div>
    
    </div>
    
    <div class="menu-exit"></div>

</div>
