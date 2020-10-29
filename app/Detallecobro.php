<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $cobro_id
 * @property string $nombre
 * @property float $valor
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Cobro $cobro
 */
class Detallecobro extends Model
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
    protected $fillable = ['cobro_id', 'nombre', 'valor', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cobro()
    {
        return $this->belongsTo('App\Cobro');
    }
}
