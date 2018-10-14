@extends('layouts/app')
<link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
<link rel="stylesheet" href="{{ asset('css/interests.css') }}">

<p class="instructions">Select what you like (At least 4)</p>

<div class="habits">
    @foreach ($habits as $habit)
        <div class="habit">
            <p>{{ $habit->name }}</p>
        </div>
    @endforeach
</div>

<div class="CTA_bg">
    <a class="btn--CTA" href="#">done</a>  
</diV>