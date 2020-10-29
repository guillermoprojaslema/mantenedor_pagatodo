<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $recaudadora_id
 * @property boolean $activo
 * @property string $nombre_tema
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Recaudadora $recaudadora
 */
class CompanyTheme extends Model
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
    protected $fillable = ['recaudadora_id', 'activo', 'nombre_tema', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recaudadora()
    {
        return $this->belongsTo('App\Recaudadora');
    }
}
