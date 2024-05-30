@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <div class="container my-3">
        <h1>Modifica il fumetto: </h1>
        <h2>{{ $comic->title }}</h2>
        <form action="{{ route('comics.update',$comic) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immgaine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="emailHelp" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="emailHelp" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="emailHelp" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="emailHelp" value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Genere</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="emailHelp" value="{{ $comic->type }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-info">Salva modifiche</button>
        </form>
        <div class="my-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Home</a>
        </div>
    </div>
@endsection