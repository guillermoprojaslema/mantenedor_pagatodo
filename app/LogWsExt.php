<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $entidad_id
 * @property string $entidad
 * @property string $input
 * @property string $output
 * @property string $payload
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class LogWsExt extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'log_ws_ext';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['empresa_id', 'entidad_id', 'entidad', 'input', 'output', 'payload', 'created_at', 'updated_at', 'deleted_at'];

}
