<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property float $monto
 * @property int $orden
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property EmpresasOpcionesrecarga[] $empresasOpcionesrecargas
 */
class Opcionesrecarga extends Model
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
    protected $fillable = ['monto', 'orden', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empresasOpcionesrecargas()
    {
        return $this->hasMany('App\EmpresasOpcionesrecarga');
    }
}
