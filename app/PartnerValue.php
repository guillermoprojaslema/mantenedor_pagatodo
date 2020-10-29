<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $item_id
 * @property integer $environment_id
 * @property string $value
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property PartnerEnvironment $partnerEnvironment
 * @property PartnerItem $partnerItem
 */
class PartnerValue extends Model
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
    protected $fillable = ['item_id', 'environment_id', 'value', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partnerEnvironment()
    {
        return $this->belongsTo('App\PartnerEnvironment', 'environment_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partnerItem()
    {
        return $this->belongsTo('App\PartnerItem', 'item_id');
    }
}
