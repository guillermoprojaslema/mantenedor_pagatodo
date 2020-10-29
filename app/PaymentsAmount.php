<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $partner_id
 * @property integer $money_id
 * @property integer $payment_method_id
 * @property float $max_amount
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Moneda $moneda
 * @property Empresa $empresa
 * @property Tipopago $tipopago
 */
class PaymentsAmount extends Model
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
    protected $fillable = ['partner_id', 'money_id', 'payment_method_id', 'max_amount', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function moneda()
    {
        return $this->belongsTo('App\Moneda', 'money_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'partner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipopago()
    {
        return $this->belongsTo('App\Tipopago', 'payment_method_id');
    }
}
