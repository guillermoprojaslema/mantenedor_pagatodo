<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer       $id
 * @property integer       $empresa_id
 * @property string        $cliente_cedula_citi
 * @property string        $created_at
 * @property string        $updated_at
 * @property string        $deleted_at
 * @property Empresa       $empresa
 * @property Cuentasciti[] $cuentascitis
 */
class Cedulasciti extends Model
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
    protected $fillable = ['empresa_id', 'cliente_cedula_citi', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuentascitis()
    {
        return $this->hasMany('App\Cuentasciti');
    }
}
