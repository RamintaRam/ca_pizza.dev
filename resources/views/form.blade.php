
<!DOCTYPE html>
<html>
<h3>Pasidaryk savo picą</h3>
<body style="background-image: url('http://cdn1.buuteeq.com/upload/23279/pizza.jpg.1920x807_default.jpg'); color: #f5f8fa">

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
    {{Form::checkbox('cheese[]', $key)}}
    {{$cheese}}
    <br>
@endforeach



{{ Form::submit('Patvirtinti')}}
{{ Form::reset('Išvalyti') }}

{!! Form::close() !!}

    </body>
    </html>
