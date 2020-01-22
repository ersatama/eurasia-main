<?php

namespace App\Models\Message;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'phone', 'code'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    function user()
    {
        return $this->hasOne('App\User');
    }
}
