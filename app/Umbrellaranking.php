<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $campana_id
 * @property string $fecha_inicio
 * @property string $fecha_termino
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Campana $campana
 */
class Umbrellaranking extends Model
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
    protected $fillable = ['campana_id', 'fecha_inicio', 'fecha_termino', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function campana()
    {
        return $this->belongsTo('App\Campana');
    }
}
