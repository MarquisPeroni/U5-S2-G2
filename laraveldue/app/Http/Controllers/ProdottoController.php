<?php

namespace App\Http\Controllers;

use App\Models\Prodotto;
use Illuminate\Http\Request;

class ProdottoController extends Controller
{
    public function index()
    {
        $prodotti = Prodotto::all();
        return view('prodotti.index', compact('prodotti'));
    }

    public function create()
    {
        return view('prodotti.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'descrizione' => 'nullable',
            'prezzo' => 'required|numeric',
            'quantita' => 'required|integer',
        ]);

        Prodotto::create($validatedData);

        return redirect('/prodotti');
    }

    public function show(Prodotto $prodotto)
    {
        return view('prodotti.show', compact('prodotto'));
    }

    public function edit(Prodotto $prodotto)
    {
        return view('prodotti.edit', compact('prodotto'));
    }

    public function update(Request $request, Prodotto $prodotto)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'descrizione' => 'nullable',
            'prezzo' => 'required|numeric',
            'quantita' => 'required|integer',
        ]);

        $prodotto->update($validatedData);

        return redirect('/prodotti');
    }

    public function destroy(Prodotto $prodotto)
    {
        $prodotto->delete();

        return redirect('/prodotti');
    }
}

