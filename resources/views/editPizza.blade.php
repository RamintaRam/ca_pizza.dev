<!DOCTYPE html>
<html>
<h2>Pasidaryk savo picą</h2>
<body style="background-image: url('http://cdn1.buuteeq.com/upload/23279/pizza.jpg.1920x807_default.jpg'); color: #f5f8fa">

@if(isset($record))
    <div style="background-color: green; text-align: center"><h3>Užsakymas pridėtas sėkmingai: {{$record}}</h3></div>
@endif

{!! Form::open(['url' => route('app.pizza.create')]) !!}

Picos padas: <br>

@foreach($pad as $key => $pad1)

    @if($singlePizza['pad']['id'] == $key)
        {{Form::checkbox('pad[]', $key, true)}}
    @else
        {{Form::checkbox('pad[]', $key)}}
    @endif
    {{$pad1}} {{$padCalories[$key]}} kcal <br>

@endforeach

<br>
Ingredientai :<br>
@foreach($ingredients as $key => $ingredient)

    @if(in_array($key, $pizzaIngredients))
        {{Form::checkbox('ingredients[]', $key, true)}}
    @else
        {{Form::checkbox('ingredients[]', $key)}}
    @endif

    {{$ingredient}} {{$calories[$key]}} kcal <br>
@endforeach


<br>
Sūris: <br>
@foreach($cheese as $key => $cheese)
    @if($singlePizza['cheese']['id'] == $key)
        {{Form::checkbox('cheese[]', $key, true)}}
    @else
        {{Form::checkbox('cheese[]', $key)}}
    @endif
    {{$cheese}} {{$cheeseCalories[$key]}} kcal <br>

@endforeach
<br>
<br>



{{ Form::label('name', 'Telefono nr.')}} <br>
{{ Form::text('name') }}
<br>
<br>

{{ Form::label('comment', 'Komentaras')}} <br>
{{ Form::textarea('comment') }}

<br>
<br>
{{ Form::submit('Patvirtinti')}}
{{ Form::reset('Išvalyti') }}

{!! Form::close() !!}

</body>
</html>
