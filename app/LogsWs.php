<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $input
 * @property string $output
 * @property string $url
 * @property string $payload
 * @property string $created_at
 * @property string $updated_at
 */
class LogsWs extends Model
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
    protected $fillable = ['input', 'output', 'url', 'payload', 'created_at', 'updated_at'];

}
