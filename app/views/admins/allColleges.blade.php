@extends('layouts.event_default')
@section('content')
@foreach($colleges as $college)
<div id="event">
  <h4>College Id:</h4>
  <p>{{$college->id}}</p>
  <h4>College Name:</h4>
  <p>{{$college->name}}</p>
  <h4>College Ambasador:</h4>
  <p>{{$college->caName}}</p>
  <h4>CA phone:</h4>
  <p>{{$college->caPhone}}</p>
  <h4>Participants:</h4>
  <p>
    @foreach($college->participants as $participant)
    <li>Name: {{$participant->name}} | Phone: {{$participant->phone}}</li>
    @endforeach
  </p>
</div>
@endforeach
@endsection
