@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="card-title">Tutti i Prodotti</h1>
            <a href="{{ route("comics.create",) }}" class="btn btn-primary">
                Crea Prodotto
            </a>
        </div>
    </div>
    <div class="row g-3">
        @foreach ($comics as $comic)
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title">{{ $comic->title }}</h2>
                        <a href="{{ route('comics.show',$comic->id) }}" class="btn btn-primary">
                            vedi dettagli
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection