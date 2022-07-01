<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <fieldset>
        <table>
            @foreach ($data as $item)
            <tr>
                <td> ID :  {{ $item['id'] }} </td>
                <td> Disponibilité : {{ $item['available'] }} </td>
                <td> Nom : {{ $item['name'] }} </td>
                <td> Type : {{ $item['type'] }} </td>
                <!-- <td> Image : {{ $item['image_path'] }} </td> -->
                <td> Description : {{ $item['description'] }} </td>
                <td> Prix : {{ $item['price'] }} </td>
                <td> {{ $item['timestamps'] }} </td>
                
                <!-- check if user has role_id 3 corresp Gérant -->
                @role([3])

                    <td> <a href={{ "edit_meals/".$item['id'] }}>Modifier le plat</a></td>
                    <td> <a href={{ "add_to_order/".$item['id'] }}>Ajouter à la commande</a></td>  
                    
                @endrole   
            </tr>   
            @endforeach
        </table>
        <br><br>
        <td> <a href={{ "create_order" }}>Créer une commande</a></td>  
        <br><br>
        <fieldset>
        <h2> Liste des commandes : </h2>
        @foreach ($data_orders as $item)
            <tr>
                <td> ID :  {{ $item['id'] }} </td>
                <td> Status : {{ $item['status'] }} </td>
                <td> Prix : {{ $item['price'] }} </td>
                <td> {{ $item['timestamps'] }} </td>
                <td> <a href={{ "current_order/".$item['id'] }}>Sélectionner cette commande</a></td>
            </tr>
            <br>
        @endforeach
    </fieldset>
    <br><br>
    <fieldset>
        @foreach ($data_orders as $item)
            <?php if ($item['current_order'] == 1){
                echo ($item['id']);
            }?>
        @endforeach
    </fieldset>
    </body>
</html>