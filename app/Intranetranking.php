<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer             $id
 * @property integer             $empleado_id
 * @property integer             $empresa_id
 * @property int                 $tipo_1
 * @property int                 $tipo_2
 * @property int                 $tipo_3
 * @property string              $fecha_inicio
 * @property string              $fecha_termino
 * @property boolean             $semana
 * @property string              $created_at
 * @property string              $updated_at
 * @property string              $deleted_at
 * @property Empleado            $empleado
 * @property Empresa             $empresa
 * @property Intranetincentivo[] $intranetincentivos
 */
class Intranetranking extends Model
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
        'empleado_id',
        'empresa_id',
        'tipo_1',
        'tipo_2',
        'tipo_3',
        'fecha_inicio',
        'fecha_termino',
        'semana',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function intranetincentivos()
    {
        return $this->hasMany('App\Intranetincentivo');
    }
}
