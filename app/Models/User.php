<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = true;
    protected $table = "users";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'rol',
        'avatar',
        'status',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
    protected $hidden = [
        'password',
				'email_password'
    ];

}
