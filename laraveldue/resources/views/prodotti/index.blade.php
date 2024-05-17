@extends('layouts.app')

@section('content')
    <h1>Prodotti</h1>
    <a href="{{ url('/prodotti/create') }}">Crea nuovo prodotto</a>
    <ul>
        @foreach ($prodotti as $prodotto)
            <li>
                <a href="{{ url('/prodotti', $prodotto->id) }}">{{ $prodotto->nome }}</a>
                <a href="{{ url('/prodotti/' . $prodotto->id . '/edit') }}">Modifica</a>
                <form action="{{ url('/prodotti', $prodotto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
