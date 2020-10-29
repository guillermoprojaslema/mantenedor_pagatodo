<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $ip_address
 * @property string $request_headers
 * @property string $request_url
 * @property string $request_content_type
 * @property string $response_reason_phrase
 * @property integer $response_status_code
 * @property string $request_body
 * @property string $response_body
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class LogWebservice extends Model
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
    protected $fillable = ['ip_address', 'request_headers', 'request_url', 'request_content_type', 'response_reason_phrase', 'response_status_code', 'request_body', 'response_body', 'created_at', 'updated_at', 'deleted_at'];

}
