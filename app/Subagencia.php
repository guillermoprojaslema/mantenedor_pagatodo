<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $sucursal_id
 * @property float $saldo_actual
 * @property float $saldo_total
 * @property boolean $activable
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Sucursale $sucursale
 * @property SubagenciaLog[] $subagenciaLogs
 * @property SubagenciaPago[] $subagenciaPagos
 */
class Subagencia extends Model
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
    protected $fillable = ['sucursal_id', 'saldo_actual', 'saldo_total', 'activable', 'created_at', 'updated_at', 'deleted_at'];

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
    public function subagenciaLogs()
    {
        return $this->hasMany('App\SubagenciaLog');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subagenciaPagos()
    {
        return $this->hasMany('App\SubagenciaPago');
    }
}
