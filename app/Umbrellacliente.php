<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $cedula
 * @property string $nombre
 * @property string $fono
 * @property int $puntos
 * @property string $periodo
 * @property boolean $estado
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Umbrellapunto[] $umbrellapuntos
 */
class Umbrellacliente extends Model
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
    protected $fillable = ['cedula', 'nombre', 'fono', 'puntos', 'periodo', 'estado', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function umbrellapuntos()
    {
        return $this->hasMany('App\Umbrellapunto');
    }
}
