@extends('layouts.app')

@section('title', 'Show')

@section('content')
    <div class="container p-4">
        <div class="row justify-content-around">
            <div class="col">
                <h1>Fumetto scelto: <br> {{ $comic->title }}</h1>
            </div>
            <div class="col text-center">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Home</a>
            </div>
            <div class="col text-center">
                <a href="{{ route('comics.edit', $comic ) }}" class="btn btn-info">Modifica</a>
            </div>
            <div class="col text-center">
                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
        <p>
        {{ $comic->description }}
        </p>
        <img src="{{ $comic->thumb }}" alt="comics cover"> 
    </div>

@endsection