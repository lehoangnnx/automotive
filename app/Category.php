<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $primeryKey = 'id';
    public $timestamps= false;
    public function product(){
        return $this->hasMany('App\Product', 'categories_id');
    }
}
