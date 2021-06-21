<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = ([
        'nombres',
        'ciudad',
        'telefono',
        'email'
    ]);

    /**
     * Get all of the ubicaciones for the Clientes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ubicaciones(): HasMany
    {
        return $this->hasMany(Ubicaciones::class, 'foreign_key', 'local_key');
    }

    /**
     * Get all of the impresoras for the Clientes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impresoras(): HasMany
    {
        return $this->hasMany(Impresoras::class, 'foreign_key', 'local_key');
    }

    /**
     * Get all of the computadoras for the Clientes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computadoras(): HasMany
    {
        return $this->hasMany(Computadoras::class, 'foreign_key', 'local_key');
    }
}
