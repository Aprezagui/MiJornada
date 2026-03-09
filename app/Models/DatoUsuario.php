<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DatoUsuario extends Model
{
    use HasFactory;

    // Especificamos la tabla si el nombre no sigue la convención plural estándar (dato_usuarios)
    protected $table = 'dato_usuario';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'apellido_1',
        'apellido_2',
        'email',
        'telefono',
        'id_roles',
        'settings',
        'password',
    ];

    // Ocultar la contraseña por seguridad al convertir a array o JSON
    protected $hidden = [
        'password',
    ];

    /**
     * Definir la relación con el modelo de Rol.
     * Asumiendo que tu modelo de rol se llama 'Rol'
     */
    public function rol(): BelongsTo
    {
        return $this->belongsTo(Rol::class, 'id_roles');
    }
}