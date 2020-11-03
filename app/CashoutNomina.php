<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $cashout_empresa_id
 * @property float $monto
 * @property int $validacion
 * @property int $cantidad
 * @property string $fecha
 * @property string $observacion
 * @property string $extras
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property CashoutEmpresa $cashoutEmpresa
 * @property CashoutCobro[] $cashoutCobros
 * @property CashoutPago[] $cashoutPagos
 */
class CashoutNomina extends Model
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
        'cashout_empresa_id',
        'monto',
        'validacion',
        'cantidad',
        'fecha',
        'observacion',
        'extras',
        'descripcion',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cashoutEmpresa()
    {
        return $this->belongsTo('App\CashoutEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashoutCobros()
    {
        return $this->hasMany('App\CashoutCobro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashoutPagos()
    {
        return $this->hasMany('App\CashoutPago');
    }
}
