
<!DOCTYPE html>
<html>
<body>

@if(isset($name))
    <div> Ingrediento rūšis įvesta {{$name . ', id: ' . $id}}</div>

@endif

{!! Form::open(['url' => route('app.ingredients.create')]) !!}

{{ Form::label('ingredients', 'Ingredients')}}
{{ Form::text('ingredients') }}

{{ Form::submit('Submit')}}

{!! Form::close() !!}

</body>
</html>