@extends('layouts/app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<div class="menu">
    <div class="selector"></div>
    <div class="menuOptions--option selected">
        <a href="">level</a>
    </div>
    <div class="menuOptions--option">
        <a href="">calender</a>
    </div>
</div>

@section('content')
    @component('components/navigation')
    @endcomponent
@endsection