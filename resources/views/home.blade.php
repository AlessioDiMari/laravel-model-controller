@extends('layouts/app')

@section('content')

    <div class="container py-5">
        <h1>Lista dei film</h1>

        {{$movies}}
    </div>

@endsection