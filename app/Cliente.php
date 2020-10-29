<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $cedula
 * @property string $email
 * @property string $celular
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Cuenta[] $cuentas
 * @property Pago[] $pagos
 * @property Pagosbk[] $pagosbks
 */
class Cliente extends Model
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
    protected $fillable = ['nombre', 'cedula', 'email', 'celular', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuentas()
    {
        return $this->hasMany('App\Cuenta');
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
}
