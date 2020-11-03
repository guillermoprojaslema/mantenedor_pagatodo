<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $recaudadora_id
 * @property integer $empresa_id
 * @property integer $tipocargo_id
 * @property integer $cashout_empresa_id
 * @property float $monto
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property CashoutEmpresa $cashoutEmpresa
 * @property Empresa $empresa
 * @property Recaudadora $recaudadora
 * @property Tipocargo $tipocargo
 */
class CargoPorServicio extends Model
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
        'recaudadora_id',
        'empresa_id',
        'tipocargo_id',
        'cashout_empresa_id',
        'monto',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recaudadora()
    {
        return $this->belongsTo('App\Recaudadora');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipocargo()
    {
        return $this->belongsTo('App\Tipocargo');
    }
}
