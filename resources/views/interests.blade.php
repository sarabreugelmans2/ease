@extends('layouts/app')
<link rel="stylesheet" href="{{ asset('css/errors.css') }}">
<link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
<link rel="stylesheet" href="{{ asset('css/interests.css') }}">

<p class="instructions">Select what you like (At least 4)</p>
@if (session('error'))
    <div class="error">{{ session('error') }}</div>
@endif
<form action="{{action('InterestsController@save')}}" method="POST">
<div class="habits">
    @foreach ($habits as $habit)
        <input class="habit_selector" type="checkbox" name="habits[]" id="habit_{{ $habit->id }}" value="{{ $habit->id }}">
        <label class="habit" for="habit_{{ $habit->id }}">
            {{ $habit->name }}
        </label>
        
    @endforeach
</div>
<div class="CTA_bg">
    <button class="btn--CTA" type="submit">done</button>  
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
