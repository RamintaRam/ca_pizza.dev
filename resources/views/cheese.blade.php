<!DOCTYPE html>
<html>
<body>

@if(isset($name))
    <div> Sūrio rūšis įvesta {{$name . ', id: ' . $id}}</div>

@endif

{!! Form::open(['url' => route('app.cheese.create')]) !!}

{{ Form::label('cheese', 'Cheese')}}
{{ Form::text('cheese') }}

{{ Form::label('calories', 'Calories')}}
{{ Form::text('calories') }}

{{ Form::submit('Submit')}}

{!! Form::close() !!}

</body>
</html>