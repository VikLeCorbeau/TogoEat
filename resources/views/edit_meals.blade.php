<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form action="/meals_update" method="post">
            @csrf
            <fieldset>
                <legend>Meal</legend>
                <input type="hidden" name="id" value="{{ $data['id'] }}"> <br><br>
                <div>
                <span>Availability : </span>
                    <input type="radio" name="available" value="1" checked>
                        <label for="available">Disponible</label>
                    <input type="radio" name="available" value="0">
                        <label for="not_available">Non Disponible</label>
                    <br><br>
                <span>Name : </span><input type="text" name="name" value="{{ $data['name'] }}"> <br><br>
                <span>Type : </span><label for="type">Quel est le type?</label>
                   <select name="type" value="{{ $data['type'] }}">
                      <option>entrée</option>
                      <option>plat</option>                                                                                                                                                                                                                                                                                                                                                                                                                
                      <option>dessert</option>
                   </select><br><br>
                <!--<span>Image_path : </span><input type="text" name="image_path" value="{{ $data['image_path'] }}"> <br><br> -->
                <span>Description : </span><input type="text" name="description" value="{{ $data['description'] }}"> <br><br>
                <span>Price : </span><input type="text" name="price" value="{{ $data['price'] }}"> <br><br>
            </fieldset>
            <br><button type="submit"> Update </button><br>
        </form>                                                                  
    </body>
</html>