<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MyResetPassword;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = true;
    protected $table = "users";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
				'country_id',
        'name',
        'email',
        'phone',
        'rol',
        'avatar',
        'status',
				'visible',
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

		public function country(){
				return $this->belongsTo(Country::class, 'country_id');
		}

		// Enviar notificacion de correo.
		public function sendPasswordResetNotification($token)
		{
		    $this->notify(new MyResetPassword($token));
		}


}
