@extends('layouts/app')
<link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
<link rel="stylesheet" href="{{ asset('css/relax.css') }}">
@section('title')
Track relax
@endsection
    <div class="title_relax">
    <h1>Hooray, you completed your daily session.</h1>
    <h2>Did you like this session? </h2>
    
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
</div>

    <div class="relax">
        <form action="{{action('RelaxController@store')}}" method="POST">
            @csrf    
            <div class="input_relax">
                
                <label > 
                <input type="radio" value="0" name="status" class="btn--relax">
                <img class="img_relax" src="{{ asset('img/smiley_sad.jpg') }}"> 
                <p>Less relaxed</p> </label>
                
                <label >
                <input type="radio" value="1" name="status" class="btn--relax">
                <img class="img_relax" src="{{ asset('img/smiley_neutral.jpg') }}"> 
                <p>Same as before my relaxation habbit </p> </label>

                <label>
                <input type="radio" value="2" name="status"
                class="btn--relax">
                <img class="img_relax" src="{{ asset('img/smiley_happy.jpg') }}"> 
                <p> More relaxed </p></label> 
            </div>
   
            <div class="CTA_bg">
            <input type="submit" value="Submit" name="submit" class="btn--CTA">
            </div>
        </form>    
    </div>

