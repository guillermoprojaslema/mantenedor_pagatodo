<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $sucursal_id
 * @property integer $grupo_id
 * @property integer $estado_id
 * @property integer $empresa_id
 * @property integer $cashout_empresa_id
 * @property string $nombre
 * @property string $cedula
 * @property string $codigo
 * @property string $usuario
 * @property string $password
 * @property string $terminal
 * @property string $tokenId
 * @property boolean $es_virtual
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property CashoutEmpresa $cashoutEmpresa
 * @property Empresa $empresa
 * @property Estado $estado
 * @property Grupo $grupo
 * @property Sucursale $sucursale
 * @property CashoutLog[] $cashoutLogs
 * @property CashoutPago[] $cashoutPagos
 * @property Cuenta[] $cuentas
 * @property EmployeePartner[] $employeePartners
 * @property EmployeePassword[] $employeePasswords
 * @property Intranetarchivo[] $intranetarchivos
 * @property Intranetincentivo[] $intranetincentivos
 * @property Intranetlog[] $intranetlogs
 * @property Intranetnoticia[] $intranetnoticias
 * @property Intranetranking[] $intranetrankings
 * @property Log[] $logs
 * @property Logs1[] $logs1s
 * @property Pago[] $pagos
 * @property Pagosbk[] $pagosbks
 * @property Ranking[] $rankings
 * @property Recarga[] $recargas
 */
class Empleado extends Model
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
    protected $fillable = ['sucursal_id', 'grupo_id', 'estado_id', 'empresa_id', 'cashout_empresa_id', 'nombre', 'cedula', 'codigo', 'usuario', 'password', 'terminal', 'tokenId', 'es_virtual', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cashoutEmpresa()
    {
        return $this->belongsTo('App\CashoutEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado()
    {
        return $this->belongsTo('App\Estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grupo()
    {
        return $this->belongsTo('App\Grupo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashoutLogs()
    {
        return $this->hasMany('App\CashoutLog');
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
    public function cuentas()
    {
        return $this->hasMany('App\Cuenta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employeePartners()
    {
        return $this->hasMany('App\EmployeePartner', 'employee_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employeePasswords()
    {
        return $this->hasMany('App\EmployeePassword');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function intranetarchivos()
    {
        return $this->hasMany('App\Intranetarchivo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function intranetincentivos()
    {
        return $this->hasMany('App\Intranetincentivo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function intranetlogs()
    {
        return $this->hasMany('App\Intranetlog');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function intranetnoticias()
    {
        return $this->hasMany('App\Intranetnoticia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function intranetrankings()
    {
        return $this->hasMany('App\Intranetranking');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logs()
    {
        return $this->hasMany('App\Log');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logs1s()
    {
        return $this->hasMany('App\Logs1');
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
    public function rankings()
    {
        return $this->hasMany('App\Ranking');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recargas()
    {
        return $this->hasMany('App\Recarga');
    }
}
