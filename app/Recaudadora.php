<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer                      $id
 * @property string                       $nombre
 * @property string                       $fono_contacto
 * @property string                       $nombre_contacto
 * @property string                       $numero
 * @property string                       $dominio
 * @property string                       $created_at
 * @property string                       $updated_at
 * @property string                       $deleted_at
 * @property CargoPorServicio[]           $cargoPorServicios
 * @property ComisionesRecaudadora[]      $comisionesRecaudadoras
 * @property CompanyTheme[]               $companyThemes
 * @property Mercadeo[]                   $mercadeos
 * @property RecaudadorasCashoutEmpresa[] $recaudadorasCashoutEmpresas
 * @property RecaudadorasEmpresa[]        $recaudadorasEmpresas
 * @property RecaudadorasServicio[]       $recaudadorasServicios
 * @property Sucursale[]                  $sucursales
 */
class Recaudadora extends Model
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
    protected $fillable = [
        'nombre',
        'fono_contacto',
        'nombre_contacto',
        'numero',
        'dominio',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

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
    public function comisionesRecaudadoras()
    {
        return $this->hasMany('App\ComisionesRecaudadora');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companyThemes()
    {
        return $this->hasMany('App\CompanyTheme');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mercadeos()
    {
        return $this->hasMany('App\Mercadeo');
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
    public function recaudadorasEmpresas()
    {
        return $this->hasMany('App\RecaudadorasEmpresa');
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
    public function sucursales()
    {
        return $this->hasMany('App\Sucursale');
    }
}
