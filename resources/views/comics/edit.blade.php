@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col  text-center">
            <H1>MODIFICA IL PRODOTTO{{ $comic->id }}</H1>
            <form action="{{ route("comics.update",["comic" => $comic -> id]) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="title" class="form-label">titolo</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}" placeholder="inserisci il titolo...">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">desctizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">img</label>
                    <input class="form-control" type="file" id="formFile" value="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">prezzo</label>
                    <input type="number" class="form-control" name="price" id="price" value="{{ $comic->price }}" placeholder="inserisci il prezzo...">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}" placeholder="inserisci la serie...">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">data</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{ $comic->sale_date }}">
                </div>
                <div class="mb-3"> 
                     <label for="type" class="form-label"> Tipo</label>
                    <select class="form-select" name="type" id="type"  required>
                        <option {{ $comic->type == null || $comic->type == " " ? "selected" : " " }}>Selezione un tipo</option>
                        <option value="comic book" {{ $comic->type == "comic book" ? "selected" : " " }}>comic book</option>
                        <option value="graphic novel" {{ $comic->type == "graphic novel"  ? "selected" : " " }}>graphic novel</option>
                      </select>
                </div>
                  <div>
                        <button type="submit" class="btn btn-warning">SALVA</button>
                  </div>
                  <a href="{{ route("comics.index",) }}" class="btn btn-primary">
                    torna indietro
                </a>
                  
            </form>
        </div>
    </div>
</div>
@endsection