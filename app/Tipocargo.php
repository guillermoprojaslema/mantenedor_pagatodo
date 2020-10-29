<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer                 $id
 * @property string                  $nombre
 * @property string                  $created_at
 * @property string                  $updated_at
 * @property string                  $deleted_at
 * @property CargoPorServicio[]      $cargoPorServicios
 * @property ComisionesEmpresa[]     $comisionesEmpresas
 * @property ComisionesRecaudadora[] $comisionesRecaudadoras
 */
class Tipocargo extends Model
{
    use SoftDeletes;

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
    public function cargoPorServicios()
    {
        return $this->hasMany('App\CargoPorServicio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comisionesEmpresas()
    {
        return $this->hasMany('App\ComisionesEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comisionesRecaudadoras()
    {
        return $this->hasMany('App\ComisionesRecaudadora');
    }
}
