@extends('layouts.app')

@section('title', 'Fumetti')

@section('content')
    <div class="container">
        <h1>Comics:</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-3">
            <div class="card m-3" style="width: 300px;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <p class="card-text">{{ $comic->series }}</p>
                    <p class="card-text">{{ $comic->sale_date }}</p>
                    <p class="card-text">{{ $comic->price }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection