<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'rg',
        'phone1',
        'phone2',
        'address',
        'date_of_birth'
    ];

    public function rating(){
    	$ratings = $this->hasMany('App\Rating')->get();
    	return $ratings->sum('number') / $ratings->count();
    }
}
