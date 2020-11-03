<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $oficina_id
 * @property string  $cliente_cedula
 * @property string  $fecha_asignada
 * @property string  $nombre_cliente
 * @property string  $apellido_cliente
 * @property string  $fecha_nacimiento
 * @property boolean $estado
 * @property string  $created_at
 * @property string  $updated_at
 * @property string  $deleted_at
 * @property Oficina $oficina
 */
class Cita extends Model
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
        'oficina_id',
        'cliente_cedula',
        'fecha_asignada',
        'nombre_cliente',
        'apellido_cliente',
        'fecha_nacimiento',
        'estado',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oficina()
    {
        return $this->belongsTo('App\Oficina');
    }
}
