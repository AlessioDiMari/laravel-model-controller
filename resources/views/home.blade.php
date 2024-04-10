@extends('layouts/app')

@section('content')

    <div class="container py-5">
        <h1>Lista dei film</h1>

        
        <div class="row row-cols-auto g-5 py-5">

            @foreach ($movies as $movie)
            
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$movie->title}}</h5>
                          <h6>{{$movie->original_title}}</h6>
                          <p class="card-text">
                            Nationalità: {{$movie->nationality}} <br>
                            Data di uscita: {{$movie->date}} <br>
                            Voto: {{$movie->vote}}
                          </p>
                          <a href="#" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>

    </div>

@endsection