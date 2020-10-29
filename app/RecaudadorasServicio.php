<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $recaudadora_id
 * @property integer $servicio_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Recaudadora $recaudadora
 * @property Servicio $servicio
 */
class RecaudadorasServicio extends Model
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
    protected $fillable = ['recaudadora_id', 'servicio_id', 'created_at', 'updated_at', 'deleted_at'];

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
    public function servicio()
    {
        return $this->belongsTo('App\Servicio');
    }
}
