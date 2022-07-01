<div class="header-container">

    <div class="header-wrapper">

        <div class="header-icon-container menu-icon">
            <svg class="icon icon-header icon--clickable" style="height: 12px;">
                <use xlink:href="{{ asset('svg/icons.svg#hamburger_menu') }}"></use>
            </svg>
        </div>
    
        <div class="header-search-container">
            <input class="basic-input input-search" type="search" id="app-search" placeholder="Recherche ..." name="q">
        </div>
    
        @if (Route::has('login'))

            @auth
                <div class="header-icon-container user-icon">
                    <svg class="icon icon-header icon--clickable">
                        <use xlink:href="{{ asset('svg/icons.svg#user') }}"></use>
                    </svg>
                </div>
                {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
            @else

                <div class="header-icon-container">
                    <a href="{{ route('login') }}">
                        <svg class="icon icon-header icon--clickable">
                            <use xlink:href="{{ asset('svg/icons.svg#user') }}"></use>
                        </svg>
                    </a>
                </div>
                {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif --}}
            @endauth



        @endif 



    </div>

</div>