<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $branch_id
 * @property integer $partner_id
 * @property integer $deposit_setting_id
 * @property boolean $just_virtual_employees
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Sucursale $sucursale
 * @property DepositSetting $depositSetting
 * @property Empresa $empresa
 */
class DepositValue extends Model
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
    protected $fillable = ['branch_id', 'partner_id', 'deposit_setting_id', 'just_virtual_employees', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursale()
    {
        return $this->belongsTo('App\Sucursale', 'branch_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function depositSetting()
    {
        return $this->belongsTo('App\DepositSetting');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'partner_id');
    }
}
