@extends('layouts.base')

@section('content')


<div class="content-container">

    <div class="items-container">

        <div class="items-top-container">
            <p class="items-title t1 do">Ajouter/Modifier [entité]</p>
            <a class="items-top-button dg" href="#"></a>
        </div>

        <div class="add-edit-container">

            <form action="">

                <div class="article-image-container add-edit-image-container ratio-idem">
                    <label for="file-input">
                        <img src="{{ asset('img/profil/profil2.jpg') }}" alt="">
                    </label>

                    <input id="file-input" type="file"/>
                </div>

                <div class="add-edit-inputs-container">

                    <input class="basic-input add-edit-input" type="text" name="" id="" placeholder="Nom">
                    <input class="basic-input add-edit-input" type="text" name="" id="" placeholder="Prénom">
                    <input class="basic-input add-edit-input" type="password" name="" id="" placeholder="Mot de passe">
                    <input class="basic-input add-edit-input" type="email" name="test" id="" placeholder="Email">

                    <div class="basic-select">
                        <select>
                            <option value="0">Type</option>
                            <option value="Cuisinier">Cuisinier</option>
                            <option value="Serveur">Serveur</option>
                            <option value="Gérant">Gérant</option>
                        </select>
                    </div>


                </div>


                <div class="add-edit-buttons-container">

                    <input class="basic-button button--dark" type="submit" value="Ajouter / Modifier">
                    <a href="" class="basic-button button--light">Supprimer</a>

                </div>

            </form>

        </div>

    </div>
    
</div>

@endsection
