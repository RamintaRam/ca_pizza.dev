
<!DOCTYPE html>
<html>
<body>

@if(isset($name))
    <div> Pado rūšis įvesta {{$name . ', id: ' . $id}}</div>

@endif

{!! Form::open(['url' => route('app.pad.create')]) !!}

{{ Form::label('pad', 'Pad')}}
{{ Form::text('pad') }}

{{ Form::submit('Submit')}}

{!! Form::close() !!}

</body>
</html>

