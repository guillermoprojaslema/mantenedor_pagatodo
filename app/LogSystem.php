<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $message
 * @property int $level
 * @property string $level_name
 * @property string $channel
 * @property string $context
 * @property string $extra
 * @property string $created_at
 * @property string $updated_at
 */
class LogSystem extends Model
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
    protected $fillable = ['message', 'level', 'level_name', 'channel', 'context', 'extra', 'created_at', 'updated_at'];

}
