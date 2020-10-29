<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $umbrellacliente_id
 * @property int $tipo_1
 * @property int $tipo_2
 * @property int $tipo_3
 * @property int $tipo_4
 * @property int $tipo_5
 * @property string $fecha_inicio
 * @property string $fecha_termino
 * @property boolean $estado
 * @property int $tipo_6
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Umbrellacliente $umbrellacliente
 */
class Umbrellapunto extends Model
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
    protected $fillable = ['umbrellacliente_id', 'tipo_1', 'tipo_2', 'tipo_3', 'tipo_4', 'tipo_5', 'fecha_inicio', 'fecha_termino', 'estado', 'tipo_6', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function umbrellacliente()
    {
        return $this->belongsTo('App\Umbrellacliente');
    }
}
