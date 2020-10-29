<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property CargoPorServicio[] $cargoPorServicios
 * @property CashoutCobro[] $cashoutCobros
 * @property CashoutNomina[] $cashoutNominas
 * @property CashoutPago[] $cashoutPagos
 * @property ComisionesEmpresa[] $comisionesEmpresas
 * @property ComisionesRecaudadora[] $comisionesRecaudadoras
 * @property Empleado[] $empleados
 * @property RecaudadorasCashoutEmpresa[] $recaudadorasCashoutEmpresas
 * @property ServiciosCashoutEmpresa[] $serviciosCashoutEmpresas
 */
class CashoutEmpresa extends Model
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
    protected $fillable = ['nombre', 'password', 'created_at', 'updated_at', 'deleted_at'];

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
    public function cashoutCobros()
    {
        return $this->hasMany('App\CashoutCobro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashoutNominas()
    {
        return $this->hasMany('App\CashoutNomina');
    }

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
    public function empleados()
    {
        return $this->hasMany('App\Empleado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recaudadorasCashoutEmpresas()
    {
        return $this->hasMany('App\RecaudadorasCashoutEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function serviciosCashoutEmpresas()
    {
        return $this->hasMany('App\ServiciosCashoutEmpresa');
    }
}
