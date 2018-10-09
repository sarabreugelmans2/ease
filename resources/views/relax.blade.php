@extends('layouts/app')
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
            <input type="radio" value="0" name="status">
            <label for="less"> Less relaxed </label>
            <input type="radio" value="1" name="status">
            <label for="same">Same as before my relaxation habbit </label>
            <input type="radio" value="2" name="status">
            <label for="more"> More relaxed </label> 

            <input type="submit" value="Submit" name="submit">
        </form>    
    </div>
@endsection
