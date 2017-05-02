
<!DOCTYPE html>
<html>
<body style="color: darkred; background-color: black">

@if(isset($name))
    <div style="background-color: lightgreen">Užsakymas pridėtas
        sėkmingai: {{$name . ', ' . $email . ', ' . $age . ', ' . $gender  . ', id: ' . $id}}</div>

@endif

{!! Form::open(['url' => route('app.people.create')]) !!}

{{ Form::label('name', 'Name') }}
{{ Form::text('name') }}
<br>
{{ Form::label('email', 'Email') }}
{{ Form::text('email') }}
<br>

{{ Form::label('city', 'City') }}
{{ Form::select('city_id', $cities) }}

<br>
{{ Form::label('pi', 'Hobbies') }}
<br>
@foreach($hobbies as $key => $hobby)
    {{Form::checkbox('hobbies[]', $key)}}
    {{$hobby}}
    <br>
    @endforeach

    {{ Form::submit('Submit')}}

    {!! Form::close() !!}

    </body>
    </html>
