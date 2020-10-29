<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $cobro_id
 * @property integer $sucursal_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Cobro $cobro
 * @property Sucursale $sucursale
 */
class CobrosSucursal extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cobros_sucursales';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['cobro_id', 'sucursal_id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cobro()
    {
        return $this->belongsTo('App\Cobro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'sucursal_id');
    }
}
