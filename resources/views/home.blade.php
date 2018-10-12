@extends('layouts/app')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<div id="ActiveHabit"></div>

<div class="subhabit">
    <div class="subhabit-item"></div>
    <div class="subhabit-item"></div>
    <div class="subhabit-item"></div>
</div>

<div class="progressBar">
    <div class="progressBar--progress"></div>
</div>

@section('content')
    @component('components/navigation')
    @endcomponent
@endsection