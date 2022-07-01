<div class="menu-global right">

    <div class="menu-exit"></div>

    <div class="menu-container right">

        <div class="menu-wrapper">
    
            <div class="menu-profil-container">
    
                <div class="menu-profil-img-container">
                    <img class="menu-profil-img" src="{{ asset('img/profil/profil1.jpg') }}" alt="photo de profil">
                    {{-- <div class="menu-profil-icon-container">
                        <a href="">
                            <svg class="menu-profil-icon icon--clickable">
                                <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                            </svg>
                        </a>
                    </div> --}}
                </div>

                <div class="menu-profil-informations">
                    <p class="menu-profil-name">
                        {{ Auth::user()->surname }}
                        {{ Auth::user()->name }}
                    </p>
                    <p class="menu-profil-type">
                        @foreach (Auth::user()->roles as $role)
                            {{ $role->role }}
                            @if ($loop->count > 1)
                                , 
                            @endif
                        @endforeach
                    </p>
                </div>
                
            </div>
    
            <div class="menu-actions-container">
                
                <a class="action-container"  href="{{ route('edit.show', ['id' => Auth::user()->id]) }}">
                    <div class="action-icon-container">
                        <svg class="icon icon-action">
                            <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                        </svg>
                    </div>
                    <p class="action-text">Modifier mes informations</p>
                </a>

                <div class="action-container">
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <div class="action-icon-container">
                            <svg class="icon icon-action">
                                <use xlink:href="{{ asset('svg/icons.svg#deconnexion') }}"></use>
                            </svg>
                        </div>

                        {{-- <a class="action-text" href="{{ route('logout') }}">Se deconnecter</a> --}}

                        <x-responsive-nav-link 
                            class="action-text"
                            :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            Se deconnecter
                        </x-responsive-nav-link>
                    </form>

                </div>
    
            </div>
    
        </div>
    
    </div>

</div>

