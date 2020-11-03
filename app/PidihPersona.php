<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property string $identificacion_tipo
 * @property string $identificacion_codigo
 * @property string $nombre_completo
 * @property string $nacionalidad
 * @property string $cedula
 * @property string $tipo_documento
 * @property string $fecha_entrada
 * @property string $distrito
 * @property string $fecha_nacimiento
 * @property string $mntn
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property PidihCita[] $pidihCitas
 */
class PidihPersona extends Model
{
    use SoftDeletes;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = [
        'identificacion_tipo',
        'identificacion_codigo',
        'nombre_completo',
        'nacionalidad',
        'cedula',
        'tipo_documento',
        'fecha_entrada',
        'distrito',
        'fecha_nacimiento',
        'mntn',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pidihCitas()
    {
        return $this->hasMany('App\PidihCita', 'persona_id');
    }
}
