<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $empleado_id
 * @property string $titulo
 * @property string $noticia
 * @property string $fecha
 * @property string $resumen
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Empleado $empleado
 */
class Intranetnoticia extends Model
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
        'titulo',
        'noticia',
        'fecha',
        'resumen',
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
}
