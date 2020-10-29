<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $partner_id
 * @property int $code
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Empresa $empresa
 */
class ResponseMessage extends Model
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
    protected $fillable = ['partner_id', 'code', 'message', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'partner_id');
    }
}
