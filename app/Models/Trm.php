<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trm extends Model
{
    public $timestamps = true;
    protected $table = "trm";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'country_id',
        'user_id',
        'value',
        'status',
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }
}
