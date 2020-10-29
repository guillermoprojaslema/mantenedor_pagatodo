<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $tipopago_id
 * @property string $nombre
 * @property string $payment_code
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Tipopago $tipopago
 * @property MediopagosEmpresa[] $mediopagosEmpresas
 * @property MediopagosSucursale[] $mediopagosSucursales
 * @property Pago[] $pagos
 * @property Pagosbk[] $pagosbks
 * @property Recarga[] $recargas
 */
class Mediopago extends Model
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
    protected $fillable = ['tipopago_id', 'nombre', 'payment_code', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipopago()
    {
        return $this->belongsTo('App\Tipopago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mediopagosEmpresas()
    {
        return $this->hasMany('App\MediopagosEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mediopagosSucursales()
    {
        return $this->hasMany('App\MediopagosSucursale');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Pago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagosbks()
    {
        return $this->hasMany('App\Pagosbk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recargas()
    {
        return $this->hasMany('App\Recarga');
    }
}
