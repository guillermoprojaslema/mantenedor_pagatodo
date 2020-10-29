<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $cedulasciti_id
 * @property integer $moneda_id
 * @property string $numero_cuenta
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Cedulasciti $cedulasciti
 * @property Moneda $moneda
 */
class Cuentasciti extends Model
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
    protected $fillable = ['cedulasciti_id', 'moneda_id', 'numero_cuenta', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cedulasciti()
    {
        return $this->belongsTo('App\Cedulasciti');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function moneda()
    {
        return $this->belongsTo('App\Moneda');
    }
}
