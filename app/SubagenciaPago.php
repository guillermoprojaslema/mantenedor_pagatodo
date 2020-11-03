<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $subagencia_id
 * @property integer $estadopago_id
 * @property integer $banco_id
 * @property string $fecha
 * @property float $monto
 * @property float $saldo_actual
 * @property string $observacion
 * @property string $numero_deposito
 * @property string $cuenta
 * @property boolean $valija
 * @property boolean $reintegracion
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Banco $banco
 * @property Estadopago $estadopago
 * @property Subagencia $subagencia
 */
class SubagenciaPago extends Model
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
        'subagencia_id',
        'estadopago_id',
        'banco_id',
        'fecha',
        'monto',
        'saldo_actual',
        'observacion',
        'numero_deposito',
        'cuenta',
        'valija',
        'reintegracion',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function banco()
    {
        return $this->belongsTo('App\Banco');
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
    public function subagencia()
    {
        return $this->belongsTo('App\Subagencia');
    }
}
