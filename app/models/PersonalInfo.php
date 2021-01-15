<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $primaryKey = 'id_personal_info';
    protected $fillable = [
        'phone', 'name', 'birthday',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
