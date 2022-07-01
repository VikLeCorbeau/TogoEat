<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TOGOEAT</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

        @include('partials/menu')
        @auth
            @include('partials/account')
        @endauth

        <div class="base-container">

            <div class="base-wrapper">

                @include('partials/header')

                @yield('content')
                
            </div>

        </div>

        <script src="{{ asset('js/app.js') }}" defer></script> 

    </body>
</html>
