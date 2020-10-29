<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $estadocampana_id
 * @property string $nombre
 * @property string $umbrella
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Estadocampana $estadocampana
 * @property Mercadeo[] $mercadeos
 * @property Noticia[] $noticias
 * @property Umbrellaranking[] $umbrellarankings
 */
class Campana extends Model
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
    protected $fillable = ['estadocampana_id', 'nombre', 'umbrella', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estadocampana()
    {
        return $this->belongsTo('App\Estadocampana');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mercadeos()
    {
        return $this->hasMany('App\Mercadeo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function noticias()
    {
        return $this->hasMany('App\Noticia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function umbrellarankings()
    {
        return $this->hasMany('App\Umbrellaranking');
    }
}
