<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $primeryKey = 'id';
    public $timestamps= false;
    public function attribute()
    {
        return $this->belongsTo('App\ProductAttribute', 'products_id');
    }
    public function listImages(){
        return $this->hasMany('App\ProductListImages', 'products_id');
    }
    public function productAttribute(){
        return $this->hasMany('App\ProductAttribute', 'products_id');
    }
}

