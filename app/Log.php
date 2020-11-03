<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $tipolog_id
 * @property integer $empleado_id
 * @property string $clave_asociada
 * @property string $valor_asociado
 * @property string $detalle
 * @property float $monto
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Empleado $empleado
 * @property Tipolog $tipolog
 */
class Log extends Model
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
        'tipolog_id',
        'empleado_id',
        'clave_asociada',
        'valor_asociado',
        'detalle',
        'monto',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo('App\Empleado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipolog()
    {
        return $this->belongsTo('App\Tipolog');
    }
}
