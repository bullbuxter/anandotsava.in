@extends('layouts.event_default')
@section('content')
@foreach($events as $event)
<div id="event">
  <h4>Event Id:</h4>
  <p>{{$event->evId}}</p>
  <h4>Event Title:</h4>
  <p>{{$event->evName}}</p>
  <h4>Event Introduction:</h4>
  <p>{{$event->evIntro}}</p>
  <h4>Event Rules:</h4>
  <p>{{$event->evRules}}</p>
  <h4>Event Category:</h4>
  <p>{{$event->evCat}}</p>
  <h4>Organizers:</h4>
  <p>
    @foreach($event->organizers as $organizer)
    <li>Name: {{$organizer->name}} | Phone: {{$organizer->phone}}</li>
    @endforeach
  </p>
</div>
@endforeach
@endsection
