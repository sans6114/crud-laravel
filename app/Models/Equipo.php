<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'liga_id',
        'pais_id',
    ];

    public function ligaf(){
        return $this->belongsTo(Liga::class, "liga_id", "id");
    }
}
