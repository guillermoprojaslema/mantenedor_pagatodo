<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property int     $method_id
 * @property int     $group_id
 * @property string  $created_at
 * @property string  $updated_at
 * @property string  $deleted_at
 */
class WebServiceMethodGroup extends Model
{

    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_service_methods_groups';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['method_id', 'group_id', 'created_at', 'updated_at', 'deleted_at'];

}
