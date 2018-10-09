<h1> calendar </h1>

@foreach( $activity as $a)
    <li>{{$a->habit->name}} {{$a->endTime->format('d M Y')}}</li></h3>
@endforeach