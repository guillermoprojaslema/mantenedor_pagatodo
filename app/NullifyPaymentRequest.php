<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $payment_id
 * @property string $request_date
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Pago $pago
 */
class NullifyPaymentRequest extends Model
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
    protected $fillable = ['payment_id', 'request_date', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pago()
    {
        return $this->belongsTo('App\Pago', 'payment_id');
    }
}
