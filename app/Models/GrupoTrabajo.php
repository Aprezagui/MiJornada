<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoTrabajo extends Model
{
    use HasFactory;

    protected $table = 'grupoTrabajo';

    /**
     * Atributos asignables.
     */
    protected $fillable = [
        'nombre_grupo',
        'id_responsable',
    ];


    public function responsable()
    {
        return $this->belongsTo(User::class, 'id_responsable', 'id');
    }

    /**
     * Relación: Un grupo tiene muchos usuarios a través de la tabla intermedia.
     */
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'usuarioGrupo', 'id', 'id')
                    ->withPivot('es_principal')
                    ->withTimestamps();
    }
}