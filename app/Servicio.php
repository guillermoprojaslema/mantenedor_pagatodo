<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer                   $id
 * @property string                    $nombre
 * @property string                    $created_at
 * @property string                    $updated_at
 * @property string                    $deleted_at
 * @property Cedula[]                  $cedulas
 * @property Cobro[]                   $cobros
 * @property ComisionesEmpresa[]       $comisionesEmpresas
 * @property ComisionesRecaudadora[]   $comisionesRecaudadoras
 * @property RecaudadorasServicio[]    $recaudadorasServicios
 * @property ServiciosCashoutEmpresa[] $serviciosCashoutEmpresas
 * @property ServiciosEmpresa[]        $serviciosEmpresas
 */
class Servicio extends Model
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
    public function cedulas()
    {
        return $this->hasMany('App\Cedula');
    }

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recaudadorasServicios()
    {
        return $this->hasMany('App\RecaudadorasServicio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function serviciosCashoutEmpresas()
    {
        return $this->hasMany('App\ServiciosCashoutEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function serviciosEmpresas()
    {
        return $this->hasMany('App\ServiciosEmpresa');
    }
}
