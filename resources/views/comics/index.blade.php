@extends('layouts.app')

@section('title', 'Fumetti')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <h1>Comics:</h1>
            </div>
            <div class="col">
                <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi un fumetto</a>
            </div>
        </div>
        
    </div>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-3">
            <div class="card m-3" style="width: 300px;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->series }}</p>
                    <p class="card-text">{{ $comic->sale_date }}</p>
                    <p class="card-text">{{ $comic->price }}</p>
                    <a href="{{ route('comics.show', $comic ) }}" class="btn btn-primary">Dettagli</a>
                    <a href="{{ route('comics.edit', $comic ) }}" class="btn btn-info">Modifica</a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection