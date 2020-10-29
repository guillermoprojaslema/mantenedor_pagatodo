<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $cashout_nomina_id
 * @property integer $cashout_empresa_id
 * @property integer $sucursal_id
 * @property float $monto
 * @property integer $validador
 * @property string $cedula
 * @property string $cliente_nombre
 * @property int $estado
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property CashoutEmpresa $cashoutEmpresa
 * @property CashoutNomina $cashoutNomina
 * @property Sucursale $sucursale
 * @property CashoutPago[] $cashoutPagos
 */
class CashoutCobro extends Model
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
    protected $fillable = ['cashout_nomina_id', 'cashout_empresa_id', 'sucursal_id', 'monto', 'validador', 'cedula', 'cliente_nombre', 'estado', 'descripcion', 'created_at', 'updated_at', 'deleted_at'];

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
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashoutPagos()
    {
        return $this->hasMany('App\CashoutPago');
    }
}
