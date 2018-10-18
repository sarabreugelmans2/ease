<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

@extends('layouts/app')
@section('title')
Admin dashboard
@endsection

@section('content')
    <h1> How users feel about our habits </h1>
  @for($i=1; $i<=6;$i++)
    <div>
        <h1>
        </h1>
    {!! ${'chart'.$i}->container() !!}
    {!! ${'chart'.$i}->script() !!}
    </div>
   @endfor
    
   
  
@endsection