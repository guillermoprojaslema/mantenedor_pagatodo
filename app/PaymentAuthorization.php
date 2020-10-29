<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $payment_id
 * @property integer $sucursal_id
 * @property string $authorization_number
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Pago $pago
 * @property Sucursale $sucursale
 */
class PaymentAuthorization extends Model
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
    protected $fillable = ['payment_id', 'sucursal_id', 'authorization_number', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pago()
    {
        return $this->belongsTo('App\Pago', 'payment_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'sucursal_id');
    }
}
