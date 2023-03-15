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
                        <h2 class="card-title">{{ $comic->title }}</h2>
                        <a href="{{ route('comics.show',$comic->id) }}" class="btn btn-primary">
                            vedi dettagli
                        </a>
                        <a href="{{ route("comics.edit",$comic->id) }}" class="btn btn-warning">
                                Aggiorna
                        </a>
                        <form action="{{ route("comics.destroy",$comic->id) }}" method="POST">
                            @csrf
                            @method("DELETE")

                            <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Elimina
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">sei sicuro</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        ...
                                        </div>
                                        <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Elimina</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection