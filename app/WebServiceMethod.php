<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $handler
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class WebServiceMethod extends Model
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
    protected $fillable = ['name', 'handler', 'created_at', 'updated_at', 'deleted_at'];

}
