@extends('layouts.app')

@section('content')
    <h1>{{ isset($prodotto) ? 'Modifica prodotto' : 'Crea nuovo prodotto' }}</h1>
    <form action="{{ isset($prodotto) ? url('/prodotti', $prodotto->id) : url('/prodotti') }}" method="POST">
        @csrf
        @if(isset($prodotto))
            @method('PUT')
        @endif
        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome', $prodotto->nome ?? '') }}" required>
        </div>
        <div>
            <label for="descrizione">Descrizione</label>
            <textarea id="descrizione" name="descrizione">{{ old('descrizione', $prodotto->descrizione ?? '') }}</textarea>
        </div>
        <div>
            <label for="prezzo">Prezzo</label>
            <input type="text" id="prezzo" name="prezzo" value="{{ old('prezzo', $prodotto->prezzo ?? '') }}" required>
        </div>
        <div>
            <label for="quantita">Quantità</label>
            <input type="number" id="quantita" name="quantita" value="{{ old('quantita', $prodotto->quantita ?? '') }}" required>
        </div>
        <button type="submit">{{ isset($prodotto) ? 'Aggiorna' : 'Crea' }}</button>
    </form>
@endsection
