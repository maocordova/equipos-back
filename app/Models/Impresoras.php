<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impresoras extends Model
{
    use HasFactory;

    protected $fillable = ([
        'marca',
        'modelo',
        'tipo',
        'direccion_ip',
        'cliente_id',
        'ubicacion_id'
    ]);

    /**
     * Get the clientes that owns the Impresoras
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clientes(): BelongsTo
    {
        return $this->belongsTo(Clientes::class, 'foreign_key', 'other_key');
    }

    /**
     * Get the ubicaciones that owns the Impresoras
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ubicaciones(): BelongsTo
    {
        return $this->belongsTo(Ubicaciones::class, 'foreign_key', 'other_key');
    }
}
