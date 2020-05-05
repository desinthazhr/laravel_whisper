<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $guarded = ['id'];

    public function menu(){
    	return $this->hasMany('App\Menu');
    }
}
