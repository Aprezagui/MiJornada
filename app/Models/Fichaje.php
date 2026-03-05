<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichaje extends Model
{
    use HasFactory;

    protected $table = 'fichaje';

    /**
     * Atributos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'fecha',
        'ubicacion',
        'id_usuario',
        'entrada_salida',
    ];

    /**
     * Los atributos que deben ser convertidos a tipos nativos.
     * Esto te permite manejar 'fecha' como un objeto Carbon automáticamente.
     */
    protected $casts = [
        'fecha' => 'datetime',
    ];

    /**
     * Relación: Un fichaje pertenece a un Usuario.
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id');
    }
}
