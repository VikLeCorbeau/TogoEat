{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <table>
            @foreach ($users as $item)
            <tr>
                <td> {{ $item['id'] }} </td>
                <td> {{ $item['name'] }} </td>
                <td> {{ $item['image_path'] }} </td>
                <td> {{ $item['surname'] }} </td>
                <td> {{ $item['email'] }} </td>
                <td> {{ $item['role'] }} </td>
                <td> {{ $item['deactivated'] }} </td>
                <td> <a href={{ "edit/".$item['id'] }}>edit</a></td>
            </tr>    
            @endforeach
        </table>
    </body>
</html> --}}

@extends('layouts.base')

@section('content')


<div class="content-container">

    <div class="items-container">

        <div class="items-top-container">
            <p class="items-title t1 do">Employés</p>
            <a class="items-top-button dg" href="{{ route('save') }}">Ajouter un employé</a>
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
            @foreach ($users as $user)
                <div class="article-container">
                    <div class="article-image-container ratio-idem">
                        <img src="{{ $user->image_path }}" alt="">
                        <a href="{{ route('edit.show', ['id' => $user->id]) }}" class="article-edit-image-container">
                            <svg class="icon">
                                <use xlink:href="{{ asset('svg/icons.svg#edit') }}"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="article-informations-container center">
                        <p class="article-title">{{ $user->surname }} {{ $user->name }}</p>
                        <p class="article-subtitle lo">
                            {{ $user->role }}
                            {{-- @foreach ($user->roles as $role)
                                {{ $role->role }}
                                @if ($loop->count > 1)
                                    , 
                                @endif
                            @endforeach --}}
                        </p>
                    </div>
                </div>
            @endforeach


        </div>

    </div>

</div>

@endsection
