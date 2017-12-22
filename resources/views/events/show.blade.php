@extends('layout')
@section('content')
<h1>{{$event->title}}</h1>
<p><strong>Date: </strong>{{$event->formatted_date}}</p>
<p><strong>Venue: </strong>{{$event->venue}}</p>
<p><strong>Address: </strong>{{$event->venue_address}}</p>
<p><strong>City: </strong>{{$event->city}}</p>
<p><strong>State: </strong>{{$event->state}}</p>
<p><strong>Zip: </strong>{{$event->zip}}</p>
<p><strong>Organizer: </strong>{{$event->organizer}}</p>
<p><strong>Host: </strong>{{$event->host}}</p><br>

<h1>{{$event->participants_count}} Teilnehmer</h1>

@if ($can_register)
    <p>Anmelden</p>
@endif
@endsection