<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rols';

    /**
     * Los atributos que se pueden asignar de manera masiva.
     */
    protected $fillable = [
        'roles_nombre',
    ];

    /**
     * Relación con los usuarios.
     * Un rol puede tener muchos usuarios.
     */
    public function usuarios()
    {
        return $this->hasMany(User::class, 'id');
    }
}