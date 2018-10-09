<h1> calendar </h1>

@foreach( $activity as $a)
    <li>{{$a->id}} {{$a->startTime}} {{$a->habit_id}}</li></h3>
@endforeach