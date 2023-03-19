@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center m-5">
            <h1 class="card-title p-4">Tutti i Prodotti</h1>
            <a href="{{ route("comics.create",) }}" class="btn btn-primary">
                Crea Prodotto
            </a>
            
        </div>
    </div>
    <div class="row g-3">
        @foreach ($comics as $comic)
            <div class="col-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <h2 class="card-title">{{ $comic->title }}</h2>
                        <a href="{{ route('comics.show',$comic->id) }}" class="btn btn-primary">
                            vedi dettagli
                        </a>
                        <a href="{{ route("comics.edit",$comic->id) }}" class="btn btn-warning">
                                Aggiorna
                        </a>
                        <form onsubmit="return confirm('vuoi eliminare questo articolo?');" action="{{ route("comics.destroy",$comic->id) }}" method="POST">
                            @csrf
                            @method("DELETE")

                                <button  type="submit" class="btn btn-danger">
                                    Elimina
                                </button>
                                
                               

                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection