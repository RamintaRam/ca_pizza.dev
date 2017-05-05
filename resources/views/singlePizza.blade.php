<!DOCTYPE html>
<html>
<body>

<table>
    <tr style="background-color: darkgreen; color: #f5f8fa">
        <th>Užsakė</th><th>Padas</th><th>Sūris</th><th>Ingredientai</th><th>Komentaras</th><th>Kalorijos</th>
    </tr>
        <tr style="color: darkgreen">
            <td>{{$singlePizza['name']}}</td>
            <td>{{$singlePizza['pad']['name']}}</td>
            <td>{{$singlePizza['cheese']['name']}}</td>
            <td>
                @foreach ($singlePizza['ingredients'] as $ingredient)
                    {{$ingredient['ingredients']['ingredients']}}<br/>
                @endforeach
            </td>
            <td>{{$singlePizza['comment']}}</td>
            <td>{{$singlePizza['calories']}}</td>
            {{--<td><a href={{action('CAPizzaController@edit', $pizza['id'])}}><button style="color: #f5f8fa; background-color: darkgreen">Pakeisti duomenis</button></a></td>--}}
        </tr>

</table>

<button style="background-color: darkgreen; color: #f5f8fa"><a href='{{ $route }}'>Keisti</a></button>


</body>
</html>