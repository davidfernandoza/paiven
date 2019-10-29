<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = true;
    protected $table = "countries";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
				'codePrefix',
        'coin',
        'status',
				'flag',
        'created_at',
        'updated_at',
    ];

    public function trm(){
        return $this->hasMany(Trm::class);
    }

}
