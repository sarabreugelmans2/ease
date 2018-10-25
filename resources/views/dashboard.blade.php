@extends('layouts/app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

{{-- header menu --}}

<div class="menu">
    <div class="selector"></div>
    <div class="menuOptions--option selected">
        <a href="#">level</a>
    </div>
    <div class="menuOptions--option">
        <a href="/calendar">calendar</a>
    </div>
</div>

{{-- end header menu --}}
<div class="stats_wrapper">
    <div class="habit">
        <p class="habit--name">Breathing exercises</p>
        <div class="habit--progress-wrapper">
            <div class="habit--progress-fill">
                <p class="habit--progress-number">10%</p>
            </div>
        </div>
        <div class="habit--levels-wrapper">
            <p class="habit--levels-begin">Level 3 - panda</p>
            <p class="habit--levels-end">Level 4</p>
        </div>
    </div>

    <div class="habit">
        <p class="habit--name">Breathing exercises</p>
        <div class="habit--progress-wrapper">
            <div class="habit--progress-fill">
                <p class="habit--progress-number">10%</p>
            </div>
        </div>
        <div class="habit--levels-wrapper">
            <p class="habit--levels-begin">Level 3 - panda</p>
            <p class="habit--levels-end">Level 4</p>
        </div>
    </div>

    <div class="habit">
        <p class="habit--name">Breathing exercises</p>
        <div class="habit--progress-wrapper">
            <div class="habit--progress-fill">
                <p class="habit--progress-number">10%</p>
            </div>
        </div>
        <div class="habit--levels-wrapper">
            <p class="habit--levels-begin">Level 3 - panda</p>
            <p class="habit--levels-end">Level 4</p>
        </div>
    </div>
</div>
<a href="/logout"> Logout</a>

@section('content')
    @component('components/navigation')
    @endcomponent
@endsection