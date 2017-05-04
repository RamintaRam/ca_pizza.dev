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
    @foreach($padCalories as $keyKcal => $calorie)
        @if($keyKcal == $key)
            {{Form::checkbox('pad[]', $key)}}
            {{$pad1}} {{$calorie}} kcal <br>
        @endif
    @endforeach
@endforeach

<br>
Ingredientai :<br>
@foreach($ingredients as $key => $ingredient)
    @foreach($calories as $keyKcal => $calorie)
        @if($keyKcal == $key)
            {{Form::checkbox('ingredients[]', $key)}}
            {{$ingredient}} {{$calorie}} kcal <br>

        @endif
    @endforeach
@endforeach


<br>
Sūris: <br>
@foreach($cheese as $key => $cheese)
    @foreach($cheeseCalories as $keyKcal => $calorie)
        @if($keyKcal == $key)
            {{Form::checkbox('cheese[]', $key)}}
            {{$cheese}} {{$calorie}} kcal <br>
        @endif
    @endforeach
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
