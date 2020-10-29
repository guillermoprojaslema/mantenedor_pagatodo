<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer           $id
 * @property integer           $empresa_id
 * @property integer           $servicio_id
 * @property integer           $moneda_id
 * @property integer           $parent_id
 * @property string            $cliente_cedula
 * @property string            $cliente_numero
 * @property string            $fecha_emision
 * @property string            $fecha_vencimiento
 * @property float             $valor_minimo
 * @property float             $valor_total
 * @property float             $valor_multa
 * @property string            $tipo
 * @property string            $numero_boleta_factura
 * @property string            $cliente_nombre
 * @property string            $extras
 * @property string            $validador
 * @property string            $datos_visa
 * @property boolean           $obligatoria
 * @property string            $created_at
 * @property string            $updated_at
 * @property string            $deleted_at
 * @property Empresa           $empresa
 * @property Moneda            $moneda
 * @property Cobro             $cobro
 * @property Servicio          $servicio
 * @property CobrosSucursale[] $cobrosSucursales
 * @property Detallecobro[]    $detallecobros
 * @property Pago[]            $pagos
 * @property Pagosbk[]         $pagosbks
 */
class Cobro extends Model
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
        'empresa_id',
        'servicio_id',
        'moneda_id',
        'parent_id',
        'cliente_cedula',
        'cliente_numero',
        'fecha_emision',
        'fecha_vencimiento',
        'valor_minimo',
        'valor_total',
        'valor_multa',
        'tipo',
        'numero_boleta_factura',
        'cliente_nombre',
        'extras',
        'validador',
        'datos_visa',
        'obligatoria',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

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
    public function moneda()
    {
        return $this->belongsTo('App\Moneda');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cobro()
    {
        return $this->belongsTo('App\Cobro', 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function servicio()
    {
        return $this->belongsTo('App\Servicio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cobrosSucursales()
    {
        return $this->hasMany('App\CobrosSucursale');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallecobros()
    {
        return $this->hasMany('App\Detallecobro');
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
