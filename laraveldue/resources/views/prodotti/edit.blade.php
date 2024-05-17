@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Modifica Prodotto</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('prodotti.update', $prodotto->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" id="nome" class="form-control" value="{{ $prodotto->nome }}" required>
                            </div>

                            <div class="form-group">
                                <label for="descrizione">Descrizione:</label>
                                <textarea name="descrizione" id="descrizione" class="form-control">{{ $prodotto->descrizione }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="prezzo">Prezzo:</label>
                                <input type="number" name="prezzo" id="prezzo" class="form-control" value="{{ $prodotto->prezzo }}" required>
                            </div>

                            <div class="form-group">
                                <label for="quantita">Quantità:</label>
                                <input type="number" name="quantita" id="quantita" class="form-control" value="{{ $prodotto->quantita }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Salva modifiche</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
