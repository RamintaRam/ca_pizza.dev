
<!DOCTYPE html>
<html>
<body>

@if(isset($ingredients))
    <div> Ingrediento rūšis įvesta {{$ingredients . ', id: ' . $id}}</div>

@endif

{!! Form::open(['url' => route('app.ingredients.create')]) !!}

{{ Form::label('ingredients', 'Ingredients')}}
{{ Form::text('ingredients') }}


{{ Form::label('calories', 'Calories')}}
{{ Form::text('calories') }}


{{ Form::submit('Submit')}}

{!! Form::close() !!}

</body>
</html>