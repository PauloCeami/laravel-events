<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

    use HasFactory;

    // salva o dado em array no banco
    protected $casts = [
        'items' => 'array'
    ];
    protected $dates = ['date'];

}
