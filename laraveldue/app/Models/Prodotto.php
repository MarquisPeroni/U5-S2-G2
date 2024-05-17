<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $fillable = [
        'nome', 'descrizione', 'prezzo', 'quantita',
    ];
    protected $table = 'prodotti';


    // Altri attributi o metodi del modello possono essere aggiunti qui...
}

