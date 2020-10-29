<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $empleado_id
 * @property int $puntos_pre
 * @property string $fecha_inicio
 * @property string $fecha_termino
 * @property int $puntos_post
 * @property string $semana
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Empleado $empleado
 */
class Ranking extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['empleado_id', 'puntos_pre', 'fecha_inicio', 'fecha_termino', 'puntos_post', 'semana', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo('App\Empleado');
    }
}
