<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Liga extends Model

{
    protected $table="liga";
    use HasFactory;

    protected $fillable = [
        'liga',
        'pais_id'
    ];

    public function equipos() {
        return $this->hasMany(Equipo::class);
    }
}
