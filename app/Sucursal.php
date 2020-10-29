<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer                $id
 * @property integer                $recaudadora_id
 * @property string                 $nombre
 * @property string                 $numero
 * @property string                 $direccion
 * @property string                 $codigo
 * @property boolean                $impresora_carta
 * @property boolean                $impresora_termica
 * @property string                 $telefono
 * @property string                 $ciudad
 * @property string                 $provincia
 * @property string                 $contacto
 * @property string                 $cedula_rnc
 * @property string                 $nombre_legal
 * @property string                 $observaciones
 * @property boolean                $pago_rapido
 * @property boolean                $cashout
 * @property boolean                $acepta_dolar
 * @property string                 $id_gp
 * @property boolean                $activo
 * @property string                 $created_at
 * @property string                 $updated_at
 * @property string                 $deleted_at
 * @property Recaudadora            $recaudadora
 * @property CashoutCobro[]         $cashoutCobros
 * @property CashoutPago[]          $cashoutPagos
 * @property CobrosSucursale[]      $cobrosSucursales
 * @property DepositValue[]         $depositValues
 * @property Empleado[]             $empleados
 * @property Historicocobro[]       $historicocobros
 * @property MediopagosSucursale[]  $mediopagosSucursales
 * @property Mercadeo[]             $mercadeos
 * @property Pago[]                 $pagos
 * @property Pagosbk[]              $pagosbks
 * @property PaymentAuthorization[] $paymentAuthorizations
 * @property QueueSetting[]         $queueSettings
 * @property Recarga[]              $recargas
 * @property Subagencia[]           $subagencias
 * @property SucursalesSeguro[]     $sucursalesSeguros
 */
class Sucursal extends Model
{
    use SoftDeletes;

    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sucursales';

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
        'recaudadora_id',
        'nombre',
        'numero',
        'direccion',
        'codigo',
        'impresora_carta',
        'impresora_termica',
        'telefono',
        'ciudad',
        'provincia',
        'contacto',
        'cedula_rnc',
        'nombre_legal',
        'observaciones',
        'pago_rapido',
        'cashout',
        'acepta_dolar',
        'id_gp',
        'activo',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recaudadora()
    {
        return $this->belongsTo('App\Recaudadora');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashoutCobros()
    {
        return $this->hasMany('App\CashoutCobro', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashoutPagos()
    {
        return $this->hasMany('App\CashoutPago', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cobrosSucursales()
    {
        return $this->hasMany('App\CobrosSucursale', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function depositValues()
    {
        return $this->hasMany('App\DepositValue', 'branch_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Empleado', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historicocobros()
    {
        return $this->hasMany('App\Historicocobro', 'servicio_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mediopagosSucursales()
    {
        return $this->hasMany('App\MediopagosSucursale', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mercadeos()
    {
        return $this->hasMany('App\Mercadeo', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Pago', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagosbks()
    {
        return $this->hasMany('App\Pagosbk', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentAuthorizations()
    {
        return $this->hasMany('App\PaymentAuthorization', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function queueSettings()
    {
        return $this->hasMany('App\QueueSetting', 'branch_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recargas()
    {
        return $this->hasMany('App\Recarga', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subagencias()
    {
        return $this->hasMany('App\Subagencia', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sucursalesSeguros()
    {
        return $this->hasMany('App\SucursalesSeguro', 'sucursal_id');
    }
}
