<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDia extends Model
{
    use HasFactory;

    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'expediente_id', 'id');
    }
}
