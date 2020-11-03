<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer         $id
 * @property integer         $empleado_id
 * @property integer         $intranetranking_id
 * @property int             $total_ventas
 * @property int             $fecha_pago
 * @property int             $monto
 * @property string          $fecha_semana
 * @property string          $created_at
 * @property string          $updated_at
 * @property string          $deleted_at
 * @property Empleado        $empleado
 * @property Intranetranking $intranetranking
 */
class Intranetincentivo extends Model
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
        'empleado_id',
        'intranetranking_id',
        'total_ventas',
        'fecha_pago',
        'monto',
        'fecha_semana',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

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
    public function intranetranking()
    {
        return $this->belongsTo('App\Intranetranking');
    }
}
