@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <div class="container my-3">
        <h1>Carica un nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immgaine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Genere</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Carica</button>
        </form>
        <div class="my-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Home</a>
        </div>
    </div>
@endsection