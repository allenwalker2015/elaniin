<?php

namespace App\models;

use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;


class User extends Authenticatable
{

    use HasApiTokens, Notifiable;

    protected $primaryKey = "id_user";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'name', 'phone', 'birthday'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday' => 'date',
    ];

    public static function store($data)
    {

        return self::create([
            'name' => $data->username,
            'birthday' => $data->birthday,
            'phone' => $data->phone,
            'username' => $data->username,
            'email' => $data->email,
            'password' => bcrypt($data->password)
        ]);
    }

}
