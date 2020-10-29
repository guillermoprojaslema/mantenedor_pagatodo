<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $servicio_id
 * @property integer $cashout_empresa_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property CashoutEmpresa $cashoutEmpresa
 * @property Servicio $servicio
 */
class ServiciosCashoutEmpresa extends Model
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
    protected $fillable = ['servicio_id', 'cashout_empresa_id', 'created_at', 'updated_at', 'deleted_at'];

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
    public function servicio()
    {
        return $this->belongsTo('App\Servicio');
    }
}
