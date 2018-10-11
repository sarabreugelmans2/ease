@extends('layouts/app')

@section('content')
    @component('components/navigation')
        @slot('section') home @endslot
    @endcomponent
@endsection