<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $sucursal_id
 * @property integer $seguro_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Seguro $seguro
 * @property Sucursale $sucursale
 */
class SucursalSeguro extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sucursales_seguros';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['sucursal_id', 'seguro_id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seguro()
    {
        return $this->belongsTo('App\Seguro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'sucursal_id');
    }
}
