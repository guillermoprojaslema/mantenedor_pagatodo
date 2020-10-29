<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Cobro[] $cobros
 * @property Cuentasciti[] $cuentascitis
 * @property Historicocobro[] $historicocobros
 * @property PaymentsAmount[] $paymentsAmounts
 * @property Recarga[] $recargas
 */
class Moneda extends Model
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
    protected $fillable = ['nombre', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cobros()
    {
        return $this->hasMany('App\Cobro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuentascitis()
    {
        return $this->hasMany('App\Cuentasciti');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historicocobros()
    {
        return $this->hasMany('App\Historicocobro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsAmounts()
    {
        return $this->hasMany('App\PaymentsAmount', 'money_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recargas()
    {
        return $this->hasMany('App\Recarga');
    }
}
