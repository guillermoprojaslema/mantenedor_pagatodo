<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer         $id
 * @property integer         $empresa_id
 * @property integer         $opcionesrecarga_id
 * @property string          $created_at
 * @property string          $updated_at
 * @property string          $deleted_at
 * @property Empresa         $empresa
 * @property Opcionesrecarga $opcionesrecarga
 */
class EmpresasOpcionesrecarga extends Model
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
    protected $fillable = ['empresa_id', 'opcionesrecarga_id', 'created_at', 'updated_at', 'deleted_at'];

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
    public function opcionesrecarga()
    {
        return $this->belongsTo('App\Opcionesrecarga');
    }
}
