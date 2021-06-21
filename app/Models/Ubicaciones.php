<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicaciones extends Model
{
    use HasFactory;

    protected $fillable = ([
        'nombre',
        'descripcion',
        'cliente_id'
    ]);

    /**
     * Get all of the impresoras for the Ubicaciones
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impresoras(): HasMany
    {
        return $this->hasMany(Impresoras::class, 'foreign_key', 'local_key');
    }

    /**
     * Get all of the computadoras for the Ubicaciones
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computadoras(): HasMany
    {
        return $this->hasMany(Computadoras::class, 'foreign_key', 'local_key');
    }

    /**
     * Get the clientes that owns the Ubicaciones
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clientes(): BelongsTo
    {
        return $this->belongsTo(Clientes::class, 'foreign_key', 'other_key');
    }
}
