<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $campana_id
 * @property string  $titulo
 * @property string  $bajada
 * @property string  $imagen
 * @property string  $texto
 * @property string  $created_at
 * @property string  $updated_at
 * @property string  $deleted_at
 * @property Campana $campana
 */
class Noticia extends Model
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
        'campana_id',
        'titulo',
        'bajada',
        'imagen',
        'texto',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function campana()
    {
        return $this->belongsTo('App\Campana');
    }
}
