<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $recaudadora_id
 * @property integer $sucursal_id
 * @property integer $campana_id
 * @property int $meta_pago
 * @property int $meta_recarga
 * @property string $fecha_desde
 * @property string $fecha_hasta
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Campana $campana
 * @property Recaudadora $recaudadora
 * @property Sucursale $sucursale
 */
class Mercadeo extends Model
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
        'sucursal_id',
        'campana_id',
        'meta_pago',
        'meta_recarga',
        'fecha_desde',
        'fecha_hasta',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function campana()
    {
        return $this->belongsTo('App\Campana');
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
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'sucursal_id');
    }
}
