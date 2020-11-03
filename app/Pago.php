<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer                 $id
 * @property integer                 $cobro_id
 * @property integer                 $sucursal_id
 * @property integer                 $empresa_id
 * @property integer                 $tipopago_id
 * @property integer                 $mediopago_id
 * @property integer                 $estadopago_id
 * @property integer                 $dolar_id
 * @property integer                 $cliente_id
 * @property integer                 $parent_id
 * @property integer                 $empleado_id
 * @property string                  $fecha
 * @property float                   $monto
 * @property string                  $numero_recibo
 * @property string                  $numero_mediopago
 * @property string                  $observacion
 * @property string                  $tipo
 * @property string                  $extras
 * @property int                     $intento_pago
 * @property boolean                 $reimpresion
 * @property int                     $tiempo
 * @property int                     $tiempo_real
 * @property string                  $validador_web_service
 * @property boolean                 $pago_express
 * @property boolean                 $sumar
 * @property float                   $tiempo_respuesta_ws
 * @property string                  $error
 * @property string                  $created_at
 * @property string                  $updated_at
 * @property string                  $deleted_at
 * @property Cliente                 $cliente
 * @property Cobro                   $cobro
 * @property Dolare                  $dolare
 * @property Empleado                $empleado
 * @property Empresa                 $empresa
 * @property Estadopago              $estadopago
 * @property Mediopago               $mediopago
 * @property Pago                    $pago
 * @property Sucursale               $sucursale
 * @property Tipopago                $tipopago
 * @property NullifyPaymentRequest[] $nullifyPaymentRequests
 * @property PaymentAuthorization[]  $paymentAuthorizations
 * @property PidihCita[]             $pidihCitas
 * @property PromocionesPago[]       $promocionesPagos
 * @property UmbrellaCode[]          $umbrellaCodes
 */
class Pago extends Model
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
        'cobro_id',
        'sucursal_id',
        'empresa_id',
        'tipopago_id',
        'mediopago_id',
        'estadopago_id',
        'dolar_id',
        'cliente_id',
        'parent_id',
        'empleado_id',
        'fecha',
        'monto',
        'numero_recibo',
        'numero_mediopago',
        'observacion',
        'tipo',
        'extras',
        'intento_pago',
        'reimpresion',
        'tiempo',
        'tiempo_real',
        'validador_web_service',
        'pago_express',
        'sumar',
        'tiempo_respuesta_ws',
        'error',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cobro()
    {
        return $this->belongsTo('App\Cobro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dolare()
    {
        return $this->belongsTo('App\Dolare', 'dolar_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo('App\Empleado');
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
    public function estadopago()
    {
        return $this->belongsTo('App\Estadopago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mediopago()
    {
        return $this->belongsTo('App\Mediopago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pago()
    {
        return $this->belongsTo('App\Pago', 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'sucursal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipopago()
    {
        return $this->belongsTo('App\Tipopago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nullifyPaymentRequests()
    {
        return $this->hasMany('App\NullifyPaymentRequest', 'payment_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentAuthorizations()
    {
        return $this->hasMany('App\PaymentAuthorization', 'payment_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pidihCitas()
    {
        return $this->hasMany('App\PidihCita');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promocionesPagos()
    {
        return $this->hasMany('App\PromocionesPago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function umbrellaCodes()
    {
        return $this->hasMany('App\UmbrellaCode', 'payment_id');
    }
}
