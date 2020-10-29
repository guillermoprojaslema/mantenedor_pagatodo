<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer        $id
 * @property string         $description
 * @property string         $handler
 * @property string         $handler_cake
 * @property string         $created_at
 * @property string         $updated_at
 * @property string         $deleted_at
 * @property DepositValue[] $depositValues
 */
class DepositSetting extends Model
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
    protected $fillable = ['description', 'handler', 'handler_cake', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function depositValues()
    {
        return $this->hasMany('App\DepositValue');
    }
}
