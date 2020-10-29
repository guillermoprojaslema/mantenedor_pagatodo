<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property CashoutPago[] $cashoutPagos
 * @property Pago[] $pagos
 * @property Pagosbk[] $pagosbks
 * @property Recarga[] $recargas
 * @property SubagenciaPago[] $subagenciaPagos
 */
class Estadopagos extends Model
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
    protected $fillable = ['nombre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashoutPagos()
    {
        return $this->hasMany('App\CashoutPago');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subagenciaPagos()
    {
        return $this->hasMany('App\SubagenciaPago');
    }
}
