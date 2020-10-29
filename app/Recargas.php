<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $empleado_id
 * @property integer $sucursal_id
 * @property integer $empresa_id
 * @property integer $tipopago_id
 * @property integer $mediopago_id
 * @property integer $estadopago_id
 * @property integer $moneda_id
 * @property float $monto
 * @property string $numero_recibo
 * @property string $numero_mediopago
 * @property string $observacion
 * @property string $numero_recarga
 * @property integer $extras
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Empleado $empleado
 * @property Empresa $empresa
 * @property Estadopago $estadopago
 * @property Mediopago $mediopago
 * @property Moneda $moneda
 * @property Sucursale $sucursale
 * @property Tipopago $tipopago
 */
class Recargas extends Model
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
    protected $fillable = ['empleado_id', 'sucursal_id', 'empresa_id', 'tipopago_id', 'mediopago_id', 'estadopago_id', 'moneda_id', 'monto', 'numero_recibo', 'numero_mediopago', 'observacion', 'numero_recarga', 'extras', 'created_at', 'updated_at', 'deleted_at'];

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
    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estadopago()
    {
        return $this->belongsTo('App\Estadopago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mediopago()
    {
        return $this->belongsTo('App\Mediopago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function moneda()
    {
        return $this->belongsTo('App\Moneda');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipopago()
    {
        return $this->belongsTo('App\Tipopago');
    }
}
