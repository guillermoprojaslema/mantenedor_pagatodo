<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $sucursal_id
 * @property integer $mediopago_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Mediopago $mediopago
 * @property Sucursale $sucursale
 */
class MediopagosSucursal extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mediopagos_sucursales';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['sucursal_id', 'mediopago_id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mediopago()
    {
        return $this->belongsTo('App\Mediopago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'sucursal_id');
    }
}
