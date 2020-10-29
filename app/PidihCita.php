<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $persona_id
 * @property integer $pago_id
 * @property integer $oficina_id
 * @property string $fecha
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Oficina $oficina
 * @property Pago $pago
 * @property PidihPersona $pidihPersona
 */
class PidihCita extends Model
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
    protected $fillable = ['persona_id', 'pago_id', 'oficina_id', 'fecha', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oficina()
    {
        return $this->belongsTo('App\Oficina');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pago()
    {
        return $this->belongsTo('App\Pago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pidihPersona()
    {
        return $this->belongsTo('App\PidihPersona', 'persona_id');
    }
}
