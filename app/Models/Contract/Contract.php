<?php

namespace App\Models\Contract;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'user',
        'name',
        'surname',
        'lastname',
        'iin',
        'sex',
        'doctype',
        'givenBy',
        'givenDate',
        'expirationDate',
        'number',
        'type',
        'start',
        'year',
        'birth',
        'sum',
        'prize',
        'residence',
        'country',
        'ipdl',
        'address',
        'addressFact',
        'phone',
        'email',
        'aim'
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
