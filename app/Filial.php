<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Filial extends Model
{
    use SoftDeletes;
    protected $table = 'filials';
    
    public function bankomats(){
        return $this->hasMany('App\Bankomat');
    }
}
