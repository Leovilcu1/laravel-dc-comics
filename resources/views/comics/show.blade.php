@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="card-title">{{ $comic->title }}</h1>
            <a href="{{ route("comics.index",) }}" class="btn btn-primary">
                torna indietro
            </a>
        </div>
    </div>
    <div class="row g-3">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <p>{{ $comic->description }}</p>
                        </a>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection