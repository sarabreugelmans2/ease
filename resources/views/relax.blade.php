@extends('layouts/app')
<link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
<link rel="stylesheet" href="{{ asset('css/relax.css') }}">
@section('title')
Track relax
@endsection
@section('content')
    <h1>Hooray, you completed your daily session.</h1>
    <h2>How are you feeling now? </h2>
<!-- Als de form wordt doorgestuurd en validation = false, wordt $errors automatisch gemaakt -->

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="relax">
        <form action="{{action('RelaxController@store')}}" method="POST">
            @csrf    
            <div class="input_relax">
                
                <label > 
                <input type="radio" value="0" name="status" class="btn--relax">
                <img class="logo" src="{{ asset('img/smiley_sad.jpg') }}"> 
                Less relaxed </label>
                
                <label >
                <input type="radio" value="1" name="status" class="btn--relax">
                <img class="logo" src="{{ asset('img/smiley_neutral.jpg') }}"> 
                Same as before my relaxation habbit </label>

                <label>
                <input type="radio" value="2" name="status"
                class="btn--relax">
                <img class="logo" src="{{ asset('img/smiley_happy.jpg') }}"> 
                More relaxed </label> 
            </div>


            <div class="CTA_bg">
            <input type="submit" value="Submit" name="submit" class="btn--CTA">
            </div>
        </form>    
    </div>
@endsection
