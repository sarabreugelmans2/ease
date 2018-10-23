@extends('layouts/app')
@section('title')
Calendar
@endsection
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

@section('content')
    <h1> Calendar </h1>
    <p> An overview of your accomplishments </p>
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
   
@endsection

<!-- https://github.com/kenwheeler/slick/-->