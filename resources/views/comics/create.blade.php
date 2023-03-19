@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <H1>CREA UN PRODOTTO</H1>
            <a href="{{ route("comics.index",) }}" class="btn btn-primary">
                    torna indietro
            </a>

            <div class="row">
                <div class="col">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                        
                    @endif
                </div>
            </div>
            <form action="{{ route("comics.store") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">titolo *</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="inserisci il titolo..." maxlength="255" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">desctizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea> 
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">img </label>
                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="inserisci img..." required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">prezzo</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="inserisci il prezzo..." required min:1>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series" id="series" placeholder="inserisci la serie..." maxlength="100" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">data</label>
                    <input type="date" class="form-control" name="date" id="date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label"> Tipo</label>
                    <select class="form-select" name="type" id="type"  required>
                        <option selected>Selezione un tipo</option>
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                      </select>
                </div>
                  <div>
                        <button type="submit" class="btn btn-warning">SALVA</button>
                  </div>
            </form>
        </div>
    </div>
</div>
@endsection