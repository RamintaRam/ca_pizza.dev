
<!DOCTYPE html>
<html>
<body style="color: darkred; background-color: lightcyan">

@if(isset($name))
    <div style="background-color: lightgreen">Užsakymas pridėtas
        sėkmingai: {{$name  . ', id: ' . $id}}</div>

@endif

{!! Form::open(['url' => route('app.pizza.create')]) !!}



Picos padas: <br>
@foreach($pad as $key => $pad1)
    {{Form::checkbox('pads[]', $key)}}
    {{$pad1}}
    <br>
@endforeach

<br>
Ingredientai :<br>
@foreach($ingredients as $key => $ingredient)
    {{Form::checkbox('ingredients[]', $key)}}
    {{$ingredient}}
    <br>
@endforeach
<br>
Sūris: <br>
@foreach($cheese as $key => $cheese)
    {{Form::checkbox('hobbies[]', $key)}}
    {{$cheese}}
    <br>
@endforeach



{{ Form::submit('Submit')}}

{!! Form::close() !!}

    </body>
    </html>
