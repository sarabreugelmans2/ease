@extends('layouts/app')
<link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<img class="logo" src="{{ asset('img/register_logo.png') }}">
</div>
<div class="header">
    <div class="wave"></div>
</div>

<div class="statsWrapper">
    <div class="statsWrapper--userStat">
        <p class="statsWrapper--userStat--title">Breathing exercises</p> 
        <p class="statsWrapper--userStat--value">{{ $BreathingCount }}</p>
    </div>
    <div class="statsWrapper--userStat">
        <p class="statsWrapper--userStat--title">Walks taken</p> 
        <p class="statsWrapper--userStat--value">{{ $WalkingCount }}</p>
    </div>
    <div class="statsWrapper--userStat">
        <p class="statsWrapper--userStat--title">Stars counted</p> 
        <p class="statsWrapper--userStat--value">{{ $StargazingCount }}</p>
    </div>
    <div class="statsWrapper--userStat">
        <p class="statsWrapper--userStat--title">Clouds watched</p> 
        <p class="statsWrapper--userStat--value">{{ $CloudwatchingCount }}</p>
    </div>
    <div class="statsWrapper--userStat">
        <p class="statsWrapper--userStat--title">runs taken</p> 
        <p class="statsWrapper--userStat--value">{{ $RunningCount }}</p>
    </div>
    <div class="statsWrapper--userStat">
        <p class="statsWrapper--userStat--title">outside time</p> 
        <p class="statsWrapper--userStat--value">{{ $OutsideCount }}</p>
    </div>
</div>
<div class="CTA_bg">
   <a class="btn--CTA" href="https://www.strava.com/oauth/authorize?client_id=29145&redirect_uri=http://homestead.test/loggedin&response_type=code">Let's get started!</a>
</diV>