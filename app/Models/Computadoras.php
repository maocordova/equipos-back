<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computadoras extends Model
{
    use HasFactory;

    protected $fillable = ([
        'marca',
        'modelo',
        'sistema_operativo',
        'usuario',
        'clave',
        'nombre_equipo',
        'nombre_red',
        'direccion_ip',
        'observaciones',
        'memoria_ram',
        'procesador',
        'disco_duro',
        'codigo_acceso',
        'cliente_id',
        'ubicacion_id'
    ]);

    /**
     * Get the clientes that owns the Computadoras
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clientes(): BelongsTo
    {
        return $this->belongsTo(Clientes::class, 'foreign_key', 'other_key');
    }

    /**
     * Get the ubicaciones that owns the Computadoras
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ubicaciones(): BelongsTo
    {
        return $this->belongsTo(Ubicaciones::class, 'foreign_key', 'other_key');
    }
}