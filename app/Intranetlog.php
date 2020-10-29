<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $empleado_id
 * @property string $origen
 * @property string $ip
 * @property integer $sucursal_id
 * @property string $fecha
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Empleado $empleado
 */
class Intranetlog extends Model
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
    protected $fillable = ['empleado_id', 'origen', 'ip', 'sucursal_id', 'fecha', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo('App\Empleado');
    }
}
