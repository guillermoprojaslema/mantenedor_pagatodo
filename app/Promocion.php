<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $empresa_id
 * @property string $nombre
 * @property string $fecha_desde
 * @property string $fecha_hasta
 * @property int $contador_pagos
 * @property int $premios
 * @property int $contador_premios
 * @property string $descripcion
 * @property float $monto
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Empresa $empresa
 * @property PromocionesPago[] $promocionesPagos
 */
class Promocion extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'promociones';

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
        'nombre',
        'fecha_desde',
        'fecha_hasta',
        'contador_pagos',
        'premios',
        'contador_premios',
        'descripcion',
        'monto',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promocionesPagos()
    {
        return $this->hasMany('App\PromocionesPago', 'promocion_id');
    }
}
