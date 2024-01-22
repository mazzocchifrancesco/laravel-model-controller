@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">FILM</h1>

<div class="container">

    <div class="row">
        
        @foreach ($movie as $film)
        <div class="col-3 my-5">
                    <!-- inizio card  -->
                    <div class="cardContainer p-3 rounded">
                        <h5 class="card-title pb-5">{{$film->title}}</h5>
                        <p><strong>Titolo originale: </strong>{{$film->original_title}}</p>
                        <p><strong>Nazionalità: </strong>{{$film->nationality}}</p>
                        <p><strong>Data: </strong>{{$film->date}}</p>
                        <p><strong>Voto: </strong>{{$film->vote}}/10</p>


                    </div>
                </div>
                @endforeach
    </div>
</div>


@endsection