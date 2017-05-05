<!DOCTYPE html>
<html>
<body>

<table>
    <tr style="background-color: darkgreen; color: #f5f8fa">
        <th>Užsakė</th><th>Padas</th><th>Sūris</th><th>Ingredientai</th><th>Komentaras</th><th>Kalorijos</th>
    </tr>
    @foreach($list as $pizza)
    <tr style="color: darkgreen">
        <td>{{$pizza['name']}}</td>
        <td>{{$pizza['pad']['name']}}</td>
        <td>{{$pizza['cheese']['name']}}</td>
        <td>
            @foreach ($pizza['ingredients'] as $ingredient)
                {{$ingredient['ingredients']['ingredients']}}<br/>
            @endforeach
        </td>
        <td>{{$pizza['comment']}}</td>
        <td>{{$pizza['calories']}}</td>
    </tr>
@endforeach
</table>

</body>
</html>