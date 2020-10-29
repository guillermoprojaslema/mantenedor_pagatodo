<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $parent_id
 * @property integer $servicio_id
 * @property integer $moneda_id
 * @property string $cliente_cedula
 * @property string $cliente_numero
 * @property string $fecha_emision
 * @property string $fecha_vencimiento
 * @property float $valor_minimo
 * @property float $valor_total
 * @property float $valor_multa
 * @property string $tipo
 * @property string $numero_boleta_factura
 * @property string $cliente_nombre
 * @property string $extras
 * @property string $datos_visa
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Empresa $empresa
 * @property Moneda $moneda
 * @property Historicocobro $historicocobro
 * @property Sucursale $sucursale
 */
class Historicocobro extends Model
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
    protected $fillable = ['empresa_id', 'parent_id', 'servicio_id', 'moneda_id', 'cliente_cedula', 'cliente_numero', 'fecha_emision', 'fecha_vencimiento', 'valor_minimo', 'valor_total', 'valor_multa', 'tipo', 'numero_boleta_factura', 'cliente_nombre', 'extras', 'datos_visa', 'created_at', 'updated_at', 'deleted_at'];

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
    public function historicocobro()
    {
        return $this->belongsTo('App\Historicocobro', 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'servicio_id');
    }
}
