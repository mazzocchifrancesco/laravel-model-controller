@extends('layouts.app')

@section('content')
<h1>FILM</h1>


<p>This is my paragraph content.</p>

@foreach ($movie as $film)
    <p>{{$film['title']}}</p>
@endforeach


@endsection