<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $cashout_cobro_id
 * @property integer $empleado_id
 * @property integer $sucursal_id
 * @property integer $cashout_empresa_id
 * @property integer $estadopago_id
 * @property integer $cashout_nomina_id
 * @property string $fecha
 * @property float $monto
 * @property int $numero_recibo
 * @property string $extras
 * @property string $cedula
 * @property string $cliente_nombre
 * @property string $tipo
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property CashoutCobro $cashoutCobro
 * @property CashoutEmpresa $cashoutEmpresa
 * @property CashoutNomina $cashoutNomina
 * @property Empleado $empleado
 * @property Estadopago $estadopago
 * @property Sucursale $sucursale
 */
class CashoutPago extends Model
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
    protected $fillable = ['cashout_cobro_id', 'empleado_id', 'sucursal_id', 'cashout_empresa_id', 'estadopago_id', 'cashout_nomina_id', 'fecha', 'monto', 'numero_recibo', 'extras', 'cedula', 'cliente_nombre', 'tipo', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cashoutCobro()
    {
        return $this->belongsTo('App\CashoutCobro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cashoutEmpresa()
    {
        return $this->belongsTo('App\CashoutEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cashoutNomina()
    {
        return $this->belongsTo('App\CashoutNomina');
    }

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
    public function estadopago()
    {
        return $this->belongsTo('App\Estadopago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'sucursal_id');
    }
}
