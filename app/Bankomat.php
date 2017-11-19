<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bankomat extends Model
{
    use SoftDeletes;
    protected $table = 'bankomats';
    
    public function filial() {
        return $this->belongsTo('App\Filial');
    }
    
    public function prostois() {
        return $this->hasMany('App\Prostoi');
    }
}
