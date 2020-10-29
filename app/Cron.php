<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $comentario
 * @property string $fecha_inicio
 * @property string $fecha_termino
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Cron extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'crones';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'comentario', 'fecha_inicio', 'fecha_termino', 'created_at', 'updated_at', 'deleted_at'];

}
