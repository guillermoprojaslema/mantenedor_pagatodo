<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $identificadorcobro_id
 * @property integer $empresa_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Empresa $empresa
 * @property Identificadorcobro $identificadorcobro
 */
class IdentificadorcobrosEmpresa extends Model
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
    protected $fillable = ['identificadorcobro_id', 'empresa_id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function identificadorcobro()
    {
        return $this->belongsTo('App\Identificadorcobro');
    }
}
