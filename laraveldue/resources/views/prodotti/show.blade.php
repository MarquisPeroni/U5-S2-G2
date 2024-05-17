@extends('layouts.app')

@section('content')
    <h1>{{ $prodotto->nome }}</h1>
    <p>{{ $prodotto->descrizione }}</p>
    <p>Prezzo: €{{ $prodotto->prezzo }}</p>
    <p>Quantità: {{ $prodotto->quantita }}</p>
    <a href="{{ url('/prodotti/' . $prodotto->id . '/edit') }}">Modifica</a>
    <form action="{{ url('/prodotti', $prodotto->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Elimina</button>
    </form>
    <a href="{{ url('/prodotti') }}">Torna ai prodotti</a>
@endsection
