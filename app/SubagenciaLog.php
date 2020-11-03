<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $subagencia_id
 * @property string $fecha
 * @property float $debito
 * @property float $credito
 * @property int $transaccion
 * @property int $tipo_transaccion
 * @property string $glosa
 * @property float $saldo_anterior
 * @property float $saldo_actual
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Subagencia $subagencia
 */
class SubagenciaLog extends Model
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
        'fecha',
        'debito',
        'credito',
        'transaccion',
        'tipo_transaccion',
        'glosa',
        'saldo_anterior',
        'saldo_actual',
        'descripcion',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subagencia()
    {
        return $this->belongsTo('App\Subagencia');
    }
}
