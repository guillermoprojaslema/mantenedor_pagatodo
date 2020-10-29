<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $pago_id
 * @property integer $promocion_id
 * @property int $validador
 * @property string $telefono
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Pago $pago
 * @property Promocione $promocione
 */
class PromocionesPago extends Model
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
    protected $fillable = ['pago_id', 'promocion_id', 'validador', 'telefono', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pago()
    {
        return $this->belongsTo('App\Pago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function promocione()
    {
        return $this->belongsTo('App\Promocione', 'promocion_id');
    }
}
