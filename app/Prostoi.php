<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prostoi extends Model
{
    use SoftDeletes;
    protected $table = 'prostois';
    
    public function bankomat() {
        return $this->belongsTo('App\Bankomat');
    }
}
