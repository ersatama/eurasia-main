<?php

namespace App\Models\Contract;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'user', 'name', 'iin', 'type', 'year', 'birth', 'sum', 'prize', 'residence', 'country', 'ipdl', 'passport', 'address', 'addressFact', 'phone', 'email', 'aim'
    ];

    public function user()
    {
        return $this->hasOne('User');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }


}
