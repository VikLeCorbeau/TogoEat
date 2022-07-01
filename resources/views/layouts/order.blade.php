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
        @include('partials/account')

        <div class="base-container">

            <div class="base-wrapper base-wrapper--grid">

                <div>
                    @include('partials/header')
                    @yield('articles')    
                </div>

                <div class="command-container">
                    @yield('order')
                </div>

            </div>

        </div>

        <script src="{{ asset('js/app.js') }}" defer></script> 

    </body>
</html>
