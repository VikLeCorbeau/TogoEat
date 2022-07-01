{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form action="{{ route('edit.update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $data['id'] }}"> <br>
            <input type="text" name="name" value="{{ $data['name'] }}"> <br>
            <input type="text" name="image_path" value="{{ $data['image_path'] }}"> <br>
            <input type="text" name="surname" value="{{ $data['surname'] }}"> <br>
            <input type="text" name="email" value="{{ $data['email'] }}"> <br>
            <input type="text" name="role" value="{{ $data['role'] }}"> <br>
            <input type="text" name="deactivated" value="{{ $data['deactivated'] }}"> <br>
            <button type="submit"> Update </button>
        </form>
    </body>
</html> --}}


@extends('layouts.base')

@section('content')


<div class="content-container">

    <div class="items-container">

        <div class="items-top-container">
            <p class="items-title t1 do">Modifier informations</p>
        </div>

        <div class="add-edit-container">

           
            <div class="access-errors-container">
                <x-auth-validation-errors class="access-error" :errors="$errors" />
            </div>

            <form action="{{ route('edit.update') }}" method="POST" class="basic-form">
                @csrf
                <input class="basic-input" type="hidden" name="id" value="{{ $data['id'] }}" placeholder="id">

                <div class="article-image-container add-edit-image-container ratio-idem">
                    <label for="file-input">
                        <img src="{{ $data['image_path'] }}" alt="">
                    </label>

                    <input id="file-input"  type="file"/>
                </div>

                <input class="basic-input" type="text" name="surname" value="{{ $data['surname'] }}" placeholder="Prénom">
                <input class="basic-input" type="text" name="name" value="{{ $data['name'] }}" placeholder="Nom">
                <input class="basic-input" type="email" name="email" value="{{ $data['email'] }}" placeholder="Email">
                <input class="basic-input" type="text" name="role" value="{{ $data['role'] }}">
                <input class="basic-input" type="text" name="deactivated" value="{{ $data['deactivated'] }}">

                <div class="add-edit-buttons-container">
                    <input type="submit" class="basic-button button--dark" value="Modifier">
                    <a href="" class="basic-button button--light">Supprimer</a>
                </div>


                {{-- <div class="basic-select">
                    <select id="Role" type="text" name="role" required autofocus >
                        <option>Gerant</option>
                        <option>Serveur</option>
                        <option>Cuisinier</option>
                    </select>
                </div> --}}

            </form>

        </div>

    </div>
    
</div>

@endsection
